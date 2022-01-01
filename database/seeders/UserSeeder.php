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
            //admin

            [
                'name' => "jatmiko",
                'email' => "Jatmiko@gmail.com",
                'password' => Hash::make('password'),
                'role' => 1,
                'is_online' => 0,
                'last_activity' => "-"
            ],[
                'name' => "Retno",
                'email' => "Retno@gmail.com",
                'password' => Hash::make('password'),
                'role' => 1,
                'is_online' => 0,
                'last_activity' => "-"
            ],
            
            //orang tua

            [
                'name' => "Darmin",
                'email' => "darmi@gmail.com",
                'password' => Hash::make('password'),
                'role' => 2,
                'is_online' => 0,
                'last_activity' => "-"
            ],[
                'name' => "Sutomo",
                'email' => "sutomo@gmail.com",
                'password' => Hash::make('password'),
                'role' => 2,
                'is_online' => 0,
                'last_activity' => "-"
            ],[
                'name' => "Joko",
                'email' => "joko@gmail.com",
                'password' => Hash::make('password'),
                'role' => 2,
                'is_online' => 0,
                'last_activity' => "-"
            ],[
                'name' => "Santoso",
                'email' => "santoso@gmail.com",
                'password' => Hash::make('password'),
                'role' => 2,
                'is_online' => 0,
                'last_activity' => "-"
            ],[
                'name' => "Dedi",
                'email' => "dedi@gmail.com",
                'password' => Hash::make('password'),
                'role' => 2,
                'is_online' => 0,
                'last_activity' => "-"
            ],[
                'name' => "Paijo",
                'email' => "paijo@gmail.com",
                'password' => Hash::make('password'),
                'role' => 2,
                'is_online' => 0,
                'last_activity' => "-"
            ],[
                'name' => "Tono",
                'email' => "tono@gmail.com",
                'password' => Hash::make('password'),
                'role' => 2,
                'is_online' => 0,
                'last_activity' => "-"
            ],[
                'name' => "Burhan",
                'email' => "burhan@gmail.com",
                'password' => Hash::make('password'),
                'role' => 2,
                'is_online' => 0,
                'last_activity' => "-"
            ],[
                'name' => "Rian",
                'email' => "rian@gmail.com",
                'password' => Hash::make('password'),
                'role' => 2,
                'is_online' => 0,
                'last_activity' => "-"
            ],
            
            
            //guru

            [
                'name' => "Nurul",
                'email' => "nurul@gmail.com",
                'password' => Hash::make('password'),
                'role' => 3,
                'is_online' => 0,
                'last_activity' => "-"
            ],[
                'name' => "Johar",
                'email' => "Johar@gmail.com",
                'password' => Hash::make('password'),
                'role' => 3,
                'is_online' => 0,
                'last_activity' => "-"
            ],
        ];
        \DB::table('users')->insert($users);
    }
}
