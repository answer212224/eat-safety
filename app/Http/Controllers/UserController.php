<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Role as ModelsRole;

class UserController extends Controller
{
    public function index()
    {
        return view('backend.users.index', [
            'title' => '使用者資料',
            'users' => User::all(),
        ]);
    }

    public function edit(User $user)
    {
        $roles = ModelsRole::all();
        return view('backend.users.edit', [
            'title' => '使用者資料',
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
}
