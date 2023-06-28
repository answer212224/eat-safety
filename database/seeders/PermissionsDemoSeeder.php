<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // User Model


        // Role Model


        // Permission Model


        // Task Model
        Permission::create(['name' => 'view-all-task']);
        Permission::create(['name' => 'create-task']);
        Permission::create(['name' => 'update-task']);
        Permission::create(['name' => 'delete-task']);
        Permission::create(['name' => 'execute-task']);

        Permission::create(['name' => 'create-meal']);
        Permission::create(['name' => 'update-meal']);
        Permission::create(['name' => 'delete-meal']);

        Permission::create(['name' => 'create-project']);
        Permission::create(['name' => 'update-project']);
        Permission::create(['name' => 'delete-project']);

        Permission::create(['name' => 'create-defect']);
        Permission::create(['name' => 'update-defect']);
        Permission::create(['name' => 'delete-defect']);

        Permission::create(['name' => 'create-restaurant']);
        Permission::create(['name' => 'update-restaurant']);
        Permission::create(['name' => 'delete-restaurant']);

        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'update-user']);
        Permission::create(['name' => 'delete-user']);

        Permission::create(['name' => 'import-data']);

        // Defect Model


        // Create Super-Admin Role
        // gets all permissions via Gate::before rule; see AuthServiceProvider
        $superAdmin = Role::create(['name' => 'super-admin']);



        // Create Admin Role
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo([
            'create-task',
            'delete-task',
            'view-all-task',
            'create-meal',
            'update-meal',
            'delete-meal',
            'create-project',
            'update-project',
            'delete-project',
            'create-defect',
            'update-defect',
            'delete-defect',
            'create-restaurant',
            'update-restaurant',
            'delete-restaurant',
            'create-user',
            'update-user',
            'delete-user',
            'import-data',
        ]);

        // Create Auditor Role
        $auditor = Role::create(['name' => 'auditor']);
        $auditor->givePermissionTo([
            'execute-task'
        ]);


        // Create Users and Assign Roles
        // $user = \App\Models\User::factory()->create([
        //     'uid' => '001001001',
        //     'name' => '稽核員1號',
        //     'department' => '食安部',
        // ]);
        // $user->assignRole($auditor);

        // $user = \App\Models\User::factory()->create([
        //     'uid' => '001001002',
        //     'name' => '稽核員2號',
        //     'department' => '食安部',
        // ]);
        // $user->assignRole($auditor);

        // $user = \App\Models\User::factory()->create([
        //     'uid' => '001001003',
        //     'name' => '稽核員3號',
        //     'department' => '食安部',
        // ]);
        // $user->assignRole($auditor);

        // $user = \App\Models\User::factory()->create([
        //     'uid' => '001001',
        //     'name' => '管理員1號',
        //     'department' => '食安部',
        // ]);
        // $user->assignRole($admin);

        // $user = \App\Models\User::factory()->create([
        //     'uid' => '001002',
        //     'name' => '管理員2號',
        //     'department' => '食安部',
        // ]);
        // $user->assignRole($admin);

        $user = \App\Models\User::factory()->create([
            'uid' => '001',
            'name' => '開發人員',
            'department' => '資管部',
            'department_serial' => '001',
            'status' => 8
        ]);
        $user->assignRole($superAdmin);
    }
}
