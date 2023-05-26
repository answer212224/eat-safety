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
        Permission::create(['name' => 'create-task']);
        Permission::create(['name' => 'delete-task']);

        // Defect Model


        // Create Super-Admin Role
        // gets all permissions via Gate::before rule; see AuthServiceProvider
        $superAdmin = Role::create(['name' => 'super-admin']);



        // Create Admin Role
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo([
            'create-task',
            'delete-task',
        ]);

        // Create Auditor Role
        $auditor = Role::create(['name' => 'auditor']);
        $auditor->givePermissionTo([]);


        // Create Users and Assign Roles
        $user = \App\Models\User::factory()->create([
            'uid' => '001001001',
            'name' => '稽核員1號',
            'department' => '食安部',
        ]);
        $user->assignRole($auditor);

        $user = \App\Models\User::factory()->create([
            'uid' => '001001002',
            'name' => '稽核員2號',
            'department' => '食安部',
        ]);
        $user->assignRole($auditor);

        $user = \App\Models\User::factory()->create([
            'uid' => '001001003',
            'name' => '稽核員3號',
            'department' => '食安部',
        ]);
        $user->assignRole($auditor);

        $user = \App\Models\User::factory()->create([
            'uid' => '001001',
            'name' => '管理員1號',
            'department' => '食安部',
        ]);
        $user->assignRole($admin);

        $user = \App\Models\User::factory()->create([
            'uid' => '001002',
            'name' => '管理員2號',
            'department' => '食安部',
        ]);
        $user->assignRole($admin);

        $user = \App\Models\User::factory()->create([
            'uid' => '001',
            'name' => '超級管理員',
            'department' => '管理部',
        ]);
        $user->assignRole($superAdmin);
    }
}
