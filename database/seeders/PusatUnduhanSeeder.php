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
            [
                'nama' => "Kebijakan Sekolah",
                'ukuran' => 100
            ],[
                'nama' => "Surat Edaran Pembagian Rapot",
                'ukuran' => 50
            ],[
                'nama' => "Undangan Rapat Orang Tua",
                'ukuran' => 50
            ],[
                'nama' => "Pemberitahuan Kegiatan Study Tour",
                'ukuran' => 50
            ],[
                'nama' => "Permohonan Sumbangan",
                'ukuran' => 50
            ],[
                'nama' => "Pengumuman Hari Libur",
                'ukuran' => 50
            ],[
                'nama' => "Pemberitahuan Pembayaran",
                'ukuran' => 100
            ],[
                'nama' => "Kegiatan Penyuluhan",
                'ukuran' => 90
            ],[
                'nama' => "Pemberitahuan Biaya Buku dan Seragam",
                'ukuran' => 80
            ],[
                'nama' => "Pemberitahuan Kegiatan Berkemah",
                'ukuran' => 50
            ]
        ];
        \DB::table('pusat_unduhan')->insert($pusat_unduhan);
    }
}
