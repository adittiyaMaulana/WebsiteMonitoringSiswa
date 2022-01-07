<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guru = [
            [
                'id_mapel' => 1,
                'nama' => "Nurul",
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "nurul@gmail.com",

            ],[
                'id_mapel' => 2,
                'nama' => 'Johar',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "johar@gmail.com"
            ],[
                'id_mapel' => 3,
                'nama' => "Isna",
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "isna@gmail.com",

            ],[
                'id_mapel' => 4,
                'nama' => 'Syamsul',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "syamsul@gmail.com"
            ],[
                'id_mapel' => 5,
                'nama' => "Nursyahria",
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "nursyahria@gmail.com",

            ],[
                'id_mapel' => 6,
                'nama' => 'Fajri',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "fajri@gmail.com"
            ],[
                'id_mapel' => 7,
                'nama' => "Leo",
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "leo@gmail.com",

            ],[
                'id_mapel' => 8,
                'nama' => 'Ika',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "ika@gmail.com"
            ],[
                'id_mapel' => 9,
                'nama' => "Eko",
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "eko@gmail.com",

            ],[
                'id_mapel' => 1,
                'nama' => 'Siti',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "siti@gmail.com"
            ],[
                'id_mapel' => 2,
                'nama' => "Dyah",
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "dyah@gmail.com",

            ],[
                'id_mapel' => 3,
                'nama' => 'Permata',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "permata@gmail.com"
            ],[
                'id_mapel' => 5,
                'nama' => 'Lisa',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "lisa@gmail.com"
            ],[
                'id_mapel' => 6,
                'nama' => 'Gilang',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "gilang@gmail.com"
            ],[
                'id_mapel' => 8,
                'nama' => 'Tri',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "tri@gmail.com"
            ],[
                'id_mapel' => 1,
                'nama' => 'Kris',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "kris@gmail.com"
            ],[
                'id_mapel' => 4,
                'nama' => 'Salsa',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "salsa@gmail.com"
            ]
        ];
        \DB::table('guru')->insert($guru);
    }
}
