<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AdminStaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(attributes: [
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make(value:123456),
            'phone_number' => '0333333333',
            'avatar' => 'https://via.placeholder.com/150',
            'address' => 'TP.HCM, VN',
            'status' => 'active',
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::create(attributes: [
            'name' => 'Staff',
            'email' => 'staff@example.com',
            'password' => Hash::make(value:123456),
            'phone_number' => '0333333334',
            'avatar' => 'https://via.placeholder.com/150',
            'address' => 'Da Nang, VN',
            'status' => 'active',
            'role_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
