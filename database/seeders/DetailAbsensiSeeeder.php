<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DetailAbsensiSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_absensi = [
            [
                'id_siswa' => 1,
                'id_absensi' => 1,
                'id_kelas' => 1,

            ],[
                'id_siswa' => 1,
                'id_absensi' => 2,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 1,
                'id_absensi' => 3,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 1,
                'id_absensi' => 4,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 1,
                'id_absensi' => 5,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 1,
                'id_absensi' => 6,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 2,
                'id_absensi' => 7,
                'id_kelas' => 1,

            ],[
                'id_siswa' => 2,
                'id_absensi' => 8,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 2,
                'id_absensi' => 9,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 2,
                'id_absensi' => 10,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 2,
                'id_absensi' => 11,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 2,
                'id_absensi' => 12,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 3,
                'id_absensi' => 13,
                'id_kelas' => 1,

            ],[
                'id_siswa' => 3,
                'id_absensi' => 14,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 3,
                'id_absensi' => 15,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 3,
                'id_absensi' => 16,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 3,
                'id_absensi' => 17,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 3,
                'id_absensi' => 18,
                'id_kelas' => 1,
            ],

            [
                'id_siswa' => 4,
                'id_absensi' => 19,
                'id_kelas' => 1,

            ],[
                'id_siswa' => 4,
                'id_absensi' => 20,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 4,
                'id_absensi' => 21,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 4,
                'id_absensi' => 22,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 4,
                'id_absensi' => 23,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 4,
                'id_absensi' => 24,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 4,
                'id_absensi' => 25,
                'id_kelas' => 1,

            ],[
                'id_siswa' => 4,
                'id_absensi' => 26,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 4,
                'id_absensi' => 27,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 4,
                'id_absensi' => 28,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 4,
                'id_absensi' => 29,
                'id_kelas' => 1,
            ],[
                'id_siswa' => 4,
                'id_absensi' => 30,
                'id_kelas' => 1,
            ]
        ];
        \DB::table('detail_absensi')->insert($detail_absensi);
    }
}
