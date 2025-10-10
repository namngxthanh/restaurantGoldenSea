<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RolePermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where(column: 'name', operator: 'admin')->first();
        $staffRole = Role::where(column: 'name', operator: 'staff')->first();
        $permissions = Permission::all();

        // Admin has all permissions
        $adminRole->permissions()->sync(ids: $permissions);

        // Staff has some permissions
        $staffPermissions = $permissions->whereIn(key: 'name', values: ['manage-meals', 'manage-contacts', 'manage-notifications']);
        $staffRole->permissions()->sync(ids: $staffPermissions);
    }
}
