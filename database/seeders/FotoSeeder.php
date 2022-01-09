<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foto = [
            'nama' => 'harvard.jpg',
            'ukuran' => '136'
        ];
        \DB::table('foto')->insert($foto);
    }
}
