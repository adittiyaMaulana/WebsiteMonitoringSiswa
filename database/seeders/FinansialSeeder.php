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
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 2,
                'nama_bayaran' => "SPP Semester 1",
                'jumlah' => 500000,
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 3,
                'nama_bayaran' => "SPP Semester 1",
                'jumlah' => 500000,
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 4,
                'nama_bayaran' => "SPP Semester 1",
                'jumlah' => 500000,
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 5,
                'nama_bayaran' => "SPP Semester 1",
                'jumlah' => 500000,
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 6,
                'nama_bayaran' => "SPP Semester 1",
                'jumlah' => 500000,
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 7,
                'nama_bayaran' => "SPP Semester 1",
                'jumlah' => 500000,
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 8,
                'nama_bayaran' => "SPP Semester 1",
                'jumlah' => 500000,
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 9,
                'nama_bayaran' => "SPP Semester 1",
                'jumlah' => 500000,
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 10,
                'nama_bayaran' => "SPP Semester 1",
                'jumlah' => 500000,
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 11,
                'nama_bayaran' => "SPP Semester 1",
                'jumlah' => 500000,
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 12,
                'nama_bayaran' => "SPP Semester 1",
                'jumlah' => 500000,
                'jatuh_tempo' => '2022-03-17'
            ]
        ];
        \DB::table('finansial')->insert($finansial);
    }
}
