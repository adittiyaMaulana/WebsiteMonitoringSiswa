<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OrangTuaSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(UserSeeder::class);
    }
}