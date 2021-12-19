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
                'nama_kelas' => "7A",
                'kelas' => 7
            ],[
                'nama_kelas' => "7B",
                'kelas' => 7
            ],[
                'nama_kelas' => "7C",
                'kelas' => 7
            ],[
                'nama_kelas' => "8A",
                'kelas' => 8
            ],[
                'nama_kelas' => "8B",
                'kelas' => 8
            ],[
                'nama_kelas' => "8C",
                'kelas' => 8
            ],[
                'nama_kelas' => "9A",
                'kelas' => 9
            ],[
                'nama_kelas' => "9B",
                'kelas' => 9
            ],[
                'nama_kelas' => "9C",
                'kelas' => 9
            ]
        ];
        \DB::table('kelas')->insert($kelas);
    }
}
