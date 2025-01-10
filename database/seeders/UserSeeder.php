<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Suep Khalifa',
                'email' => 'suep@gmail.com',
                'phone' => '0887728372555',
                'gender' => 'male',
                'password' => bcrypt('password123'),
                'role' => 'super-admin',
                'status' => 'active',
            ],
            [
                'name' => 'ryan',
                'email' => 'ryan@gmail.com',
                'phone' => '',
                'gender' => 'male',
                'password' => bcrypt('password123'),
                'role' => 'manager',
                'status' => 'active',
            ],
            [
                'name' => 'aldi',
                'email' => 'aldi@gmail.com',
                'phone' => '',
                'gender' => 'male',
                'password' => bcrypt('password123'),
                'role' => 'customer-service',
                'status' => 'active',
            ],
            [
                'name' => 'anggi',
                'email' => 'anggi@gmail.com',
                'phone' => '',
                'gender' => 'male',
                'password' => bcrypt('password123'),
                'role' => 'customer',
                'status' => 'active',
            ],
            [
                'name' => 'dico',
                'email' => 'dico@gmail.com',
                'phone' => '',
                'gender' => 'male',
                'password' => bcrypt('password123'),
                'role' => 'customer',
                'status' => 'active',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
};
