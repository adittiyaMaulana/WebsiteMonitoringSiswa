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
            ]
        ];
        \DB::table('users')->insert($users);
    }
}
