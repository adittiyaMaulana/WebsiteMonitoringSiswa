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
                'nama' => "Sella",
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 1,
                'id_orang_tua' => 2,
                'nama' => "Johnatan",
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 2,
                'id_orang_tua' => 3,
                'nama' => "Nirina",
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 2,
                'id_orang_tua' => 4,
                'nama' => "Michael",
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 3,
                'id_orang_tua' => 5,
                'nama' => "Elia",
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 3,
                'id_orang_tua' => 6,
                'nama' => "Wilhem",
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 4,
                'id_orang_tua' => 7,
                'nama' => "Desi",
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 4,
                'id_orang_tua' => 8,
                'nama' => "Joe",
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 5,
                'id_orang_tua' => 9,
                'nama' => "Variel",
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 5,
                'id_orang_tua' => 10,
                'nama' => "Yudha",
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 6,
                'id_orang_tua' => 11,
                'nama' => "Lea",
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ],[
                'id_kelas' => 6,
                'id_orang_tua' => 12,
                'nama' => "Rosa",
                'ttl' => '2009-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'semester' => '1'
            ]
        ];
        \DB::table('profil_siswa')->insert($profil_siswa);
    }
}
