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
                'id_siswa' => 1,
                'nama_bayaran' => "SPP Semester 1",
                'jumlah' => 500000,
                'jatuh_tempo' => '2022-03-17',
                'status' => 'terbayar'
            ],[
                'id_siswa' => 2,
                'nama_bayaran' => "SPP Semester 1",
                'jumlah' => 500000,
                'jatuh_tempo' => '2022-03-17',
                'status' => 'terbayar'
            ],[
                'id_siswa' => 3,
                'nama_bayaran' => "SPP Semester 1",
                'jumlah' => 500000,
                'jatuh_tempo' => '2022-03-17',
                'status' => 'terbayar'
            ]
        ];
        \DB::table('finansial')->insert($finansial);
    }
}
