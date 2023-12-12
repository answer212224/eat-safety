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


        alert()->success('使用者資料更新成功', '成功');
        return back();
    }

    public static function sync()
    {
        $employees = SysPerson::getEmployees();
        User::upsert($employees->toArray(), ['uid'], ['name', 'email', 'department', 'department_serial', 'password', 'status']);

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
    /**
     * Calculate the average defect count for each user in a given month.
     *
     * @param Request $request The HTTP request object.
     * @return \Illuminate\View\View The view displaying the average defect count for each user.
     */
    public function eatogether(Request $request)
    {
        // Retrieve the year and month from the request, or use the current date
        $yearMonth = $request->yearMonth ? Carbon::create($request->yearMonth) : Carbon::now();

        // Retrieve the selected users from the request, or use an empty array
        $selectUsers = $request->selectUsers ? $request->selectUsers : [];

        // Create a Carbon instance for the year and month
        $yearMonth = Carbon::create($yearMonth);

        // Retrieve all users with status 0 or 1
        $statuses = auth()->user()->hasRole('super-admin') ? [0, 1, 8] : [0, 1];
        $allusers = User::whereIn('status', $statuses)->get();
        $users = User::whereIn('status', $statuses);

        // Filter users by selected user IDs, if any
        if (count($selectUsers) > 0) {
            $users = $users->whereIn('id', $selectUsers);
        }

        // Retrieve the filtered users
        $users = $users->get();

        // Calculate the defect count and clear defect count for each user
        $users->each(function ($user) use ($yearMonth) {
            $user->load('taskHasDefects', 'taskHasClearDefects', 'tasks');

            // Filter taskHasDefects by the specified year and month
            $defectCount = $user->taskHasDefects->filter(function ($taskHasDefect) use ($yearMonth) {
                return $taskHasDefect->created_at->year == $yearMonth->year && $taskHasDefect->created_at->month == $yearMonth->month;
            })->count();

            // Filter taskHasClearDefects by the specified year and month
            $clearDefectCount = $user->taskHasClearDefects->filter(function ($taskHasClearDefect) use ($yearMonth) {
                return $taskHasClearDefect->created_at->year == $yearMonth->year && $taskHasClearDefect->created_at->month == $yearMonth->month;
            })->count();

            // Assign the defect count and clear defect count to the user
            $user->defectCount = $defectCount;
            $user->clearDefectCount = $clearDefectCount;

            // Retrieve tasks for the specified year and month
            $tasks = $user->tasks->filter(function ($task) use ($yearMonth) {
                $task->task_date = Carbon::create($task->task_date);
                return $task->task_date->year == $yearMonth->year && $task->task_date->month == $yearMonth->month;
            });

            // Calculate the food safety count and clean count
            $foodSafetyCount = $tasks->filter(function ($task) {
                return $task->category == '食安及5S';
            })->count();

            $cleanCount = $tasks->filter(function ($task) {
                return $task->category == '清潔檢查';
            })->count();

            // Calculate the defect average and clear defect average
            $user->defectAverage = $foodSafetyCount == 0 ? 0 : round($defectCount / $foodSafetyCount, 1);
            $user->clearDefectAverage = $cleanCount == 0 ? 0 : round($clearDefectCount / $cleanCount, 1);
        });

        // Format the year and month as 'Y-m'
        $yearMonth = $yearMonth->format('Y-m');

        // Return the view with the necessary data
        return view('backend.eatogether.users', [
            'title' => "{$yearMonth} 平均缺失數",
            'users' => $users,
            'yearMonth' => $yearMonth,
            'selectUsers' => $selectUsers,
            'allusers' => $allusers,
        ]);
    }
}
