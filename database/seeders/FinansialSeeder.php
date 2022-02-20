<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FinansialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $finansial = [
            [
                'nama_bayaran' => "SPP Semester 1 (kelas 7)",
                'jumlah' => 500000
            ],[
                'nama_bayaran' => "SPP Semester 2 (kelas 7)",
                'jumlah' => 500000
            ],[
                'nama_bayaran' => "SPP Semester 1 (kelas 8)",
                'jumlah' => 550000
            ],[
                'nama_bayaran' => "SPP Semester 2 (kelas 8)",
                'jumlah' => 550000
            ],[
                'nama_bayaran' => "SPP Semester 1 (kelas 9)",
                'jumlah' => 700000
            ],[
                'nama_bayaran' => "SPP Semester 2 (kelas 9)",
                'jumlah' => 700000
            ]
        ];
        \DB::table('finansial')->insert($finansial);
    }
}
