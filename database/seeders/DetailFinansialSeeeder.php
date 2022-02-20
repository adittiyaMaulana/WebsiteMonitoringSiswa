<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DetailFinansialSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_finansial = [
            [
                'id_siswa' => 1,
                'id_finansial' => 1,
                'status' => 'belum terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 2,
                'id_finansial' => 1,
                'status' => 'belum terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 3,
                'id_finansial' => 1,
                'status' => 'belum terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],

            [
                'id_siswa' => 4,
                'id_finansial' => 1,
                'status' => 'terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 4,
                'id_finansial' => 2,
                'status' => 'terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 4,
                'id_finansial' => 3,
                'status' => 'belum terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 5,
                'id_finansial' => 1,
                'status' => 'terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 5,
                'id_finansial' => 2,
                'status' => 'terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 5,
                'id_finansial' => 3,
                'status' => 'belum terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 6,
                'id_finansial' => 1,
                'status' => 'terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 6,
                'id_finansial' => 2,
                'status' => 'terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 6,
                'id_finansial' => 3,
                'status' => 'belum terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],

            [
                'id_siswa' => 7,
                'id_finansial' => 1,
                'status' => 'terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 7,
                'id_finansial' => 2,
                'status' => 'terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 7,
                'id_finansial' => 3,
                'status' => 'terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 7,
                'id_finansial' => 4,
                'status' => 'terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 7,
                'id_finansial' => 5,
                'status' => 'belum terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 8,
                'id_finansial' => 1,
                'status' => 'terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 8,
                'id_finansial' => 2,
                'status' => 'terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 8,
                'id_finansial' => 3,
                'status' => 'terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 8,
                'id_finansial' => 4,
                'status' => 'terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 8,
                'id_finansial' => 5,
                'status' => 'belum terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 9,
                'id_finansial' => 1,
                'status' => 'terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 9,
                'id_finansial' => 2,
                'status' => 'terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 9,
                'id_finansial' => 3,
                'status' => 'terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 9,
                'id_finansial' => 4,
                'status' => 'terbayar',
                'jatuh_tempo' => '2022-03-17'
            ],[
                'id_siswa' => 9,
                'id_finansial' => 5,
                'status' => 'belum terbayar',
                'jatuh_tempo' => '2022-03-17'
            ]
        ];
        \DB::table('detail_finansial')->insert($detail_finansial);
    }
}
