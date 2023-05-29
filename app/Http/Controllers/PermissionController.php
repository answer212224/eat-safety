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
}
