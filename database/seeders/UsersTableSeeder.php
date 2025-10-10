<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(attributes: [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make(value:123456),
            'phone_number' => '0334567890',
            'avatar' => 'https://via.placeholder.com/150',
            'address' => 'TP.HCM, VN',
            'status' => 'pending',
            'role_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::create(attributes: [
            'name' => 'Jane Dory',
            'email' => 'jane@example.com',
            'password' => Hash::make(value:123456),
            'phone_number' => '0344567890',
            'avatar' => 'https://via.placeholder.com/151',
            'address' => 'Ha Noi, VN',
            'status' => 'pending',
            'role_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::create(attributes: [
            'name' => 'David James',
            'email' => 'david@example.com',
            'password' => Hash::make(value:123456),
            'phone_number' => '0354567890',
            'avatar' => 'https://via.placeholder.com/152',
            'address' => 'Hai Phong, VN',
            'status' => 'pending',
            'role_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
