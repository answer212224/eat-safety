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
        Permission::create(['name' => 'viewAny: users']);
        Permission::create(['name' => 'view: users']);
        Permission::create(['name' => 'create: users']);
        Permission::create(['name' => 'update: users']);
        Permission::create(['name' => 'delete: users']);
        Permission::create(['name' => 'restore: users']);

        // Role Model
        Permission::create(['name' => 'viewAny: roles']);
        Permission::create(['name' => 'view: roles']);
        Permission::create(['name' => 'create: roles']);
        Permission::create(['name' => 'update: roles']);
        Permission::create(['name' => 'delete: roles']);

        // Permission Model
        Permission::create(['name' => 'viewAny: permissions']);
        Permission::create(['name' => 'view: permissions']);
        Permission::create(['name' => 'create: permissions']);
        Permission::create(['name' => 'update: permissions']);
        Permission::create(['name' => 'delete: permissions']);

        // Task Model
        Permission::create(['name' => 'viewAny: tasks']);
        Permission::create(['name' => 'view: tasks']);
        Permission::create(['name' => 'create: tasks']);
        Permission::create(['name' => 'update: tasks']);
        Permission::create(['name' => 'delete: tasks']);

        // Defect Model
        Permission::create(['name' => 'viewAny: defects']);
        Permission::create(['name' => 'view: defects']);
        Permission::create(['name' => 'create: defects']);
        Permission::create(['name' => 'update: defects']);
        Permission::create(['name' => 'delete: defects']);

        // TaskHasDefect Model
        Permission::create(['name' => 'viewAny: task_has_defects']);
        Permission::create(['name' => 'view: task_has_defects']);
        Permission::create(['name' => 'create: task_has_defects']);
        Permission::create(['name' => 'update: task_has_defects']);
        Permission::create(['name' => 'delete: task_has_defects']);

        // Create Super-Admin Role
        // gets all permissions via Gate::before rule; see AuthServiceProvider
        $superAdmin = Role::create(['name' => 'super-admin']);

        $superAdmin->givePermissionTo(Permission::all());

        // Create Admin Role
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo([
            'viewAny: users',
            'view: users',
            'update: users',
            'delete: users',
            'restore: users',

            'viewAny: tasks',
            'view: tasks',
            'create: tasks',
            'update: tasks',
            'delete: tasks',

            'viewAny: defects',
            'view: defects',
            'create: defects',
            'update: defects',
            'delete: defects',
        ]);

        // Create Auditor Role
        $auditor = Role::create(['name' => 'auditor']);
        $auditor->givePermissionTo([
            'viewAny: tasks',
            'update: tasks',
            'view: tasks',
            'viewAny: task_has_defects',
            'create: task_has_defects',
            'update: task_has_defects',
        ]);


        // Create Users and Assign Roles
        $user = \App\Models\User::factory()->create([
            'uid' => '001001001',
            'name' => '稽核員1號',
        ]);
        $user->assignRole($auditor);

        $user = \App\Models\User::factory()->create([
            'uid' => '001001002',
            'name' => '稽核員2號',
        ]);
        $user->assignRole($auditor);

        $user = \App\Models\User::factory()->create([
            'uid' => '001001003',
            'name' => '稽核員3號',
        ]);
        $user->assignRole($auditor);

        $user = \App\Models\User::factory()->create([
            'uid' => '001001',
            'name' => '管理員1號',
        ]);
        $user->assignRole($admin);

        $user = \App\Models\User::factory()->create([
            'uid' => '001002',
            'name' => '管理員1號',
        ]);
        $user->assignRole($admin);

        $user = \App\Models\User::factory()->create([
            'uid' => '001',
            'name' => '超級管理員',
        ]);
        $user->assignRole($superAdmin);
    }
}
