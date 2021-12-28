<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JadwalAkademikDanNonAkademikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jadwal = [
            [
                'nama_kegiatan' => "Libur Kenaikan Kelas",
                'jadwal_kegiatan' => "01/07/2021 - 10/07/2021"
            ],
            [
                'nama_kegiatan' => "Hari Pertama Sekolah (HP) dan Awal Semester",
                'jadwal_kegiatan' => "12/07/2021"
            ],
            [
                'nama_kegiatan' => "Masa Pengenalan Lingkungan Sekolah (MPLS) dan proses administrasi kelas",
                'jadwal_kegiatan' => "12/07/2021 - 13/07/2021"
            ],
            [
                'nama_kegiatan' => "Libur Umum (Hari Idul Adha 1442 H)",
                'jadwal_kegiatan' => "20/07/2021"
            ],
            [
                'nama_kegiatan' => "Libur Umum (Tahun Baru Islam 1443 H)",
                'jadwal_kegiatan' => "11/08/2021"
            ],
            [
                'nama_kegiatan' => "Libur Umum (Hari Kemerdekaan RI)",
                'jadwal_kegiatan' => "17/08/2021"
            ],
            [
                'nama_kegiatan' => "Penilaian Tengah Semester (disesuaikan dengan program sekolah)",
                'jadwal_kegiatan' => "20/09/2021 - 24/09/2021"
            ],
            [
                'nama_kegiatan' => "Libur Umum (Maulid Nabi Muhammad SAW)",
                'jadwal_kegiatan' => "19/10/2021"
            ],
            [
                'nama_kegiatan' => "Penilaian Akhir Semester",
                'jadwal_kegiatan' => "06/12/2021 - 10/12/2021"
            ],
            [
                'nama_kegiatan' => "Pembagian Buku Laporan Hasil Belajar (LHB)",
                'jadwal_kegiatan' => "17/12/2021"
            ],
            [
                'nama_kegiatan' => "Libur Semester Gasal",
                'jadwal_kegiatan' => "18/12/2021 - 02/01/2022"
            ],
            [
                'nama_kegiatan' => "Libur Umum (Hari Raya Natal 2021",
                'jadwal_kegiatan' => "24/12/2021 - 25/01/2022"
            ]
        ];
            \DB::table('jadwal_akademik')->insert($jadwal);
    }
}
