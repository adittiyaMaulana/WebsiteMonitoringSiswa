<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            [
                'nama_kelas' => "7A"
            ],[
                'nama_kelas' => "7B"
            ],[
                'nama_kelas' => "7C"
            ],[
                'nama_kelas' => "8A"
            ],[
                'nama_kelas' => "8B"
            ],[
                'nama_kelas' => "8C"
            ],[
                'nama_kelas' => "9A"
            ],[
                'nama_kelas' => "9B"
            ],[
                'nama_kelas' => "9C"
            ]
        ];
        \DB::table('kelas')->insert($kelas);
    }
}
