<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = ['manage-users', 'manage-meals', 'manage-orders', 'manage-categories', 'manage-bookings', 'manage-contacts', 'manage-notifications', 'manage-roles', 'manage-permissions'];
        foreach ($permissions as $permission) {
            Permission::create(attributes: ['name' => $permission]);
        }
    }
}
