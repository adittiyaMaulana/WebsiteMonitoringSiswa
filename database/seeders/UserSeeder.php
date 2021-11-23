<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'email' => "darmi@gmail.com",
                'password' => Hash::make('password'),
                'role' => 2
            ],[
                'email' => "sutomo@gmail.com",
                'password' => Hash::make('password'),
                'role' => 2
            ],[
                'email' => "nurul@gmail.com",
                'password' => Hash::make('password'),
                'role' => 3
            ],[
                'email' => "Johar@gmail.com",
                'password' => Hash::make('password'),
                'role' => 3
            ],[
                'email' => "Jatmiko@gmail.com",
                'password' => Hash::make('password'),
                'role' => 1
            ],[
                'email' => "Retno@gmail.com",
                'password' => Hash::make('password'),
                'role' => 1
            ]
        ];
        \DB::table('users')->insert($users);
    }
}
