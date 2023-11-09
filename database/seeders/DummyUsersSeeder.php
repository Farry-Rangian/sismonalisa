<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123'),
            ],
            [
                'name'=>'user',
                'email'=>'user@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('123'),
            ],
            [
                'name'=>'farry',
                'email'=>'farry@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('123'),
            ],
            [
                'name'=>'aril',
                'email'=>'aril@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('123'),
            ],
        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}
