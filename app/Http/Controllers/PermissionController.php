<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $title = '確定刪除';
        $text = "您確定要刪除嗎？\n\n刪除後將無法復原！";

        confirmDelete($title, $text);

        $roles = Role::all();
        $permissions = Permission::all();
        return view('backend.permissions.index', [
            'title' => '角色權限',
            'roles' => $roles,
            'permissions' => $permissions,
        ]);
    }

    public function store(Request $request)
    {
        Permission::create(['name' => $request->permission_name]);
        alert()->success('新增成功', '新增權限成功');
        return back();
    }

    public function destory(Permission $permission)
    {
        $permission->delete();
        alert()->success('刪除成功', '刪除權限成功');
        return back();
    }
}
