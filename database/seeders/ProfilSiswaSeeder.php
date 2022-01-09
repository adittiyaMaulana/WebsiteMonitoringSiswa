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
            ],[
                'id_kelas' => 4,
                'id_orang_tua' => 4,
                'nama' => "Prisilia",
                'nis' => '0000123454',
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 5,
                'id_orang_tua' => 5,
                'nama' => "Martin",
                'nis' => '0000123455',
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 6,
                'id_orang_tua' => 6,
                'nama' => "Kirin",
                'nis' => '0000123456',
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 7,
                'id_orang_tua' => 7,
                'nama' => "Ahmad",
                'nis' => '0000123457',
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 8,
                'id_orang_tua' => 8,
                'nama' => "Tristan",
                'nis' => '0000123458',
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 9,
                'id_orang_tua' => 9,
                'nama' => "Irene",
                'nis' => '0000123459',
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ]
        ];
        \DB::table('profil_siswa')->insert($profil_siswa);
    }
}
