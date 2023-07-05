<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
               'type'=>0,
               'password'=> bcrypt('admin123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Superadmin User',
                'email' => 'superadmin@example.com',
               'type'=>1,
               'password'=> bcrypt('superadmin123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
    
}
