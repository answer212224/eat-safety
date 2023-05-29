<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function store(Request $request)
    {
        $role = Role::create(['name' => $request->role_name]);
        alert()->success('新增成功', '新增角色成功');
        return back();
    }

    public function destory(Role $role)
    {
        $role->delete();
        alert()->success('刪除成功', '刪除角色成功');
        return back();
    }
}
