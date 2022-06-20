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
               'name'=>'Admin User',
               'email'=>'admin@scuti.id',
               'type'=>1,
               'password'=> bcrypt('admin123456'),
            ],
            [
               'name'=>'Demo Scuti',
               'email'=>'demo@scuti.id',
               'type'=>0,
               'password'=> bcrypt('demo123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
    
}
