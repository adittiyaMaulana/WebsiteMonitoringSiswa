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
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 4,
                'id_orang_tua' => 2,
                'nama' => "Johnatan",
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 7,
                'id_orang_tua' => 3,
                'nama' => "Nirina",
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ]
        ];
        \DB::table('profil_siswa')->insert($profil_siswa);
    }
}
