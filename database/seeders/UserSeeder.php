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
                'email' => "Jatmiko@gmail.com",
                'password' => Hash::make('password'),
                'role' => 1
            ],[
                'email' => "Retno@gmail.com",
                'password' => Hash::make('password'),
                'role' => 1
            ],
            
            //orang tua

            // [
            //     'email' => "darmi@gmail.com",
            //     'password' => Hash::make('password'),
            //     'role' => 2
            // ],[
            //     'email' => "sutomo@gmail.com",
            //     'password' => Hash::make('password'),
            //     'role' => 2
            // ],[
            //     'email' => "joko@gmail.com",
            //     'password' => Hash::make('password'),
            //     'role' => 2
            // ],[
            //     'email' => "susanto@gmail.com",
            //     'password' => Hash::make('password'),
            //     'role' => 2
            // ],[
            //     'email' => "david@gmail.com",
            //     'password' => Hash::make('password'),
            //     'role' => 2
            // ],[
            //     'email' => "dyah@gmail.com",
            //     'password' => Hash::make('password'),
            //     'role' => 2
            // ],[
            //     'email' => "sumarna@gmail.com",
            //     'password' => Hash::make('password'),
            //     'role' => 2
            // ],[
            //     'email' => "jaka@gmail.com",
            //     'password' => Hash::make('password'),
            //     'role' => 2
            // ],[
            //     'email' => "bima@gmail.com",
            //     'password' => Hash::make('password'),
            //     'role' => 2
            // ],[
            //     'email' => "parjo@gmail.com",
            //     'password' => Hash::make('password'),
            //     'role' => 2
            // ],[
            //     'email' => "krisno@gmail.com",
            //     'password' => Hash::make('password'),
            //     'role' => 2
            // ],[
            //     'email' => "nadim@gmail.com",
            //     'password' => Hash::make('password'),
            //     'role' => 2
            // ],
            
            
            //guru

            // [
            //     'email' => "nurul@gmail.com",
            //     'password' => Hash::make('password'),
            //     'role' => 3
            // ],[
            //     'email' => "Johar@gmail.com",
            //     'password' => Hash::make('password'),
            //     'role' => 3
            // ],
        ];
        \DB::table('users')->insert($users);
    }
}
