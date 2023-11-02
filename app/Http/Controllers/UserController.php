<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Task;
use App\Models\User;
use App\Models\SysPerson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Role as ModelsRole;

class UserController extends Controller
{
    public function index()
    {

        return view('backend.users.index', [
            'title' => '同仁資料庫',
            'users' => User::all(),
        ]);
    }

    public function edit(User $user)
    {
        $roles = ModelsRole::all();
        return view('backend.users.edit', [
            'title' => '同仁資料編輯',
            'user' => $user,
            'roles' => $roles,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        $user->syncRoles($request->role);
        alert()->success('使用者資料更新成功', '成功');
        return back();
    }

    public function upsert()
    {
        $employees = SysPerson::getEmployees();
        User::upsert($employees->toArray(), ['uid'], ['name', 'email', 'department', 'department_serial', 'password', 'status']);
        $users = User::all();
        $users->each(function ($user) {
            if ($user->hasRole('super-admin') || $user->hasRole('admin')) {
            } else if ($user->status == 0 || $user->status == 1) {
                $user->assignRole('auditor');
            } else {
                $user->removeRole('auditor');
            }
        });

        alert()->success('使用者資料更新成功', '成功');
        return back();
    }

    public static function sync()
    {
        $employees = SysPerson::getEmployees();
        User::upsert($employees->toArray(), ['uid'], ['name', 'email', 'department', 'department_serial', 'password', 'status']);
        $users = User::all();
        $users->each(function ($user) {
            if ($user->hasRole('super-admin') || $user->hasRole('admin')) {
            } else if ($user->status == 0 || $user->status == 1 || $user->status == 3) {
                $user->assignRole('auditor');
            } else {
                $user->removeRole('auditor');
            }
        });

        Log::info("使用者資料更新成功");
    }

    // user-show
    public function show(User $user, Request $request)
    {
        $user->load('taskHasDefects.defect', 'taskHasClearDefects.clearDefect', 'taskHasDefects.restaurantWorkspace.restaurant', 'taskHasClearDefects.restaurantWorkspace.restaurant', 'taskHasDefects.task', 'taskHasClearDefects');
        $yearMonth = Carbon::create($request->yearMonth);
        // 取得該月份的所有資料
        $user->taskHasDefects = $user->taskHasDefects->filter(function ($taskHasDefect) use ($yearMonth) {
            return $taskHasDefect->created_at->year == $yearMonth->year && $taskHasDefect->created_at->month == $yearMonth->month;
        });
        $user->taskHasClearDefects = $user->taskHasClearDefects->filter(function ($taskHasClearDefect) use ($yearMonth) {
            return $taskHasClearDefect->created_at->year == $yearMonth->year && $taskHasClearDefect->created_at->month == $yearMonth->month;
        });

        return view('backend.users.show', [
            'title' => '同仁資料',
            'user' => $user,
        ]);
    }

    // chart
    public function chart(User $user)
    {
        $user->load('taskHasDefects', 'taskHasClearDefects');
        $defectCount = $user->taskHasDefects->groupBy(function ($item) {
            return $item->created_at->format('Y-m');
        })->map(function ($item) {
            return $item->count();
        });
        $clearDefectCount = $user->taskHasClearDefects->groupBy(function ($item) {
            return $item->created_at->format('Y-m');
        })->map(function ($item) {
            return $item->count();
        });

        // 比對兩個陣列，如果有缺失的月份，補上0
        $defectCount->each(function ($item, $key) use ($clearDefectCount) {
            if (!isset($clearDefectCount[$key])) {
                $clearDefectCount[$key] = 0;
            }
        });

        $clearDefectCount->each(function ($item, $key) use ($defectCount) {
            if (!isset($defectCount[$key])) {
                $defectCount[$key] = 0;
            }
        });

        // 用key排序
        $defectCount = $defectCount->sortBy(function ($item, $key) {
            return $key;
        });
        $clearDefectCount = $clearDefectCount->sortBy(function ($item, $key) {
            return $key;
        });

        return view('backend.users.chart', [
            'title' => $user->name . '統計',
            'user' => $user,
            'defectCount' => $defectCount,
            'clearDefectCount' => $clearDefectCount,
        ]);
    }

    /**
     * 集團所有同仁的統計 計算每位同仁的該月缺失平均數
     * eatogether
     */
    public function eatogether(Request $request)
    {
        $yearMonth = $request->yearMonth ? Carbon::create($request->yearMonth) : Carbon::now();
        $selectUsers = $request->selectUsers ? $request->selectUsers : [];

        $yearMonth = Carbon::create($yearMonth);

        $allusers = User::whereIn('status', [0, 1])->get();

        // 取得狀態為在職的同仁和狀態是試用期的同仁
        $users = User::whereIn('status', [0, 1]);
        if (count($selectUsers) > 0) {
            $users = $users->whereIn('id', $selectUsers);
        }

        $users = $users->get();

        $users->each(function ($user) use ($yearMonth) {
            $user->load('taskHasDefects', 'taskHasClearDefects', 'tasks');
            $defectCount = $user->taskHasDefects->filter(function ($taskHasDefect) use ($yearMonth) {
                return $taskHasDefect->created_at->year == $yearMonth->year && $taskHasDefect->created_at->month == $yearMonth->month;
            })->count();
            $clearDefectCount = $user->taskHasClearDefects->filter(function ($taskHasClearDefect) use ($yearMonth) {
                return $taskHasClearDefect->created_at->year == $yearMonth->year && $taskHasClearDefect->created_at->month == $yearMonth->month;
            })->count();


            $user->defectCount = $defectCount;
            $user->clearDefectCount = $clearDefectCount;

            // 先去取得同仁該月份的所有任務
            $tasks = $user->tasks->filter(function ($task) use ($yearMonth) {
                $task->task_date = Carbon::create($task->task_date);
                return $task->task_date->year == $yearMonth->year && $task->task_date->month == $yearMonth->month;
            });
            // 計算分類為食安食安及55的任務數量
            $foodSafetyCount = $tasks->filter(function ($task) {
                return $task->category == '食安及5S';
            })->count();

            // 計算分類為清潔檢查的任務數量
            $cleanCount = $tasks->filter(function ($task) {
                return $task->category == '清潔檢查';
            })->count();

            // 計算該月缺失平均數
            // DivisionByZeroError
            if ($foodSafetyCount == 0) {
                $user->defectAverage = 0;
            } else {
                $user->defectAverage = $defectCount / $foodSafetyCount;
                // 取得小數後1位
                $user->defectAverage = round($user->defectAverage, 1);
            }
            if ($cleanCount == 0) {
                $user->clearDefectAverage = 0;
            } else {
                $user->clearDefectAverage = $clearDefectCount / $cleanCount;
                // 取得小數後1位
                $user->clearDefectAverage = round($user->clearDefectAverage, 1);
            }
        });

        $yearMonth = $yearMonth->format('Y-m');

        return view('backend.eatogether.users', [
            'title' => "{$yearMonth} 平均缺失數",
            'users' => $users,
            'yearMonth' => $yearMonth,
            'selectUsers' => $selectUsers,
            'allusers' => $allusers,
        ]);
    }
}
