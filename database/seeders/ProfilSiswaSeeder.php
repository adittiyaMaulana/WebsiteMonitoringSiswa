<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfilSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profil_siswa = [
            [
                'id_kelas' => 1,
                'id_orang_tua' => 1,
                'nama' => "Vella",
                'nis' => '0000123451',
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 2,
                'id_orang_tua' => 2,
                'nama' => "Johnatan",
                'nis' => '0000123452',
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 3,
                'id_orang_tua' => 3,
                'nama' => "Nirina",
                'nis' => '0000123453',
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ]
        ];
        \DB::table('profil_siswa')->insert($profil_siswa);
    }
}
