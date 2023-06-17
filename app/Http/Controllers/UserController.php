<?php

namespace App\Http\Controllers;

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
            'title' => '同仁資料',
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
}
