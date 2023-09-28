<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
     * 集團所有同仁的統計
     * eatogether
     */
    public function eatogether(Request $request)
    {
        $year = $request->input('year', '');
        $month = $request->input('month', '');

        $users = User::get();

        if ($year && $month) {
            $users->load(['taskHasDefects' => function ($query) use ($year, $month) {
                $query->whereYear('created_at', $year)->whereMonth('created_at', $month);
            }]);
            $users->load(['taskHasClearDefects' => function ($query) use ($year, $month) {
                $query->whereYear('created_at', $year)->whereMonth('created_at', $month);
            }]);
        } else if ($year) {
            $users->load(['taskHasDefects' => function ($query) use ($year) {
                $query->whereYear('created_at', $year);
            }]);
            $users->load(['taskHasClearDefects' => function ($query) use ($year) {
                $query->whereYear('created_at', $year);
            }]);
        } else if ($month) {
            $users->load(['taskHasDefects' => function ($query) use ($month) {
                $query->whereMonth('created_at', $month);
            }]);
            $users->load(['taskHasClearDefects' => function ($query) use ($month) {
                $query->whereMonth('created_at', $month);
            }]);
        } else {
            $users->load(['taskHasDefects', 'taskHasClearDefects']);
        }

        // 計算每個人的缺失數量
        $users->each(function ($user) {
            $user->defectCount = $user->taskHasDefects->count();
            $user->clearDefectCount = $user->taskHasClearDefects->count();
        });

        return view('backend.eatogether.users', [
            'title' => '集團同仁統計',
            'users' => $users,
        ]);
    }
}
