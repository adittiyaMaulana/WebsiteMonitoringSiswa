<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PusatUnduhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pusat_unduhan = [
            
        ];
        \DB::table('pusat_unduhan')->insert($pusat_unduhan);
    }
}
