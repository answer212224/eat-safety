<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
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
}
