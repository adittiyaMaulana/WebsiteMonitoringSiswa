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
                'nama_kelas' => "8A",
                'kelas' => 8
            ],[
                'nama_kelas' => "9A",
                'kelas' => 9
            ]
        ];
        \DB::table('kelas')->insert($kelas);
    }
}
