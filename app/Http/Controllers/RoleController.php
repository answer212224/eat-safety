<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function store(Request $request)
    {
        Role::create(['name' => $request->role_name]);
        alert()->success('新增成功', '新增角色成功');
        return back();
    }

    public function destory(Role $role)
    {
        $role->delete();
        alert()->success('刪除成功', '刪除角色成功');
        return back();
    }

    public function edit(Role $role)
    {
        $title = '編輯角色';
        $permissions = Permission::all();
        return view('backend.permissions.edit', compact('role', 'permissions', 'title'));
    }

    public function updatePermissions(Request $request, Role $role)
    {
        $role->syncPermissions($request->permissions);
        alert()->success('更新成功', '更新角色權限成功');
        return back();
    }

    public function update(Request $request, Role $role)
    {
        $role->update(['name' => $request->role_name]);
        alert()->success('更新成功', '更新角色成功');
        return back();
    }
}
