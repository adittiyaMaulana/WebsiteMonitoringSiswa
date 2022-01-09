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
                'nuptk' => '0000123456789011',
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "nurul@gmail.com",

            ],[
                'id_mapel' => 2,
                'nama' => 'Johar',
                'nuptk' => '0000123456789012',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "johar@gmail.com"
            ],[
                'id_mapel' => 3,
                'nama' => "Isna",
                'nuptk' => '0000123456789013',
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "isna@gmail.com",

            ],[
                'id_mapel' => 4,
                'nama' => 'Syamsul',
                'nuptk' => '0000123456789014',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "syamsul@gmail.com"
            ],[
                'id_mapel' => 5,
                'nama' => "Nursyahria",
                'nuptk' => '0000123456789015',
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "nursyahria@gmail.com",

            ],[
                'id_mapel' => 6,
                'nama' => 'Fajri',
                'nuptk' => '0000123456789016',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "fajri@gmail.com"
            ],[
                'id_mapel' => 7,
                'nama' => "Leo",
                'nuptk' => '0000123456789017',
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "leo@gmail.com",

            ],[
                'id_mapel' => 8,
                'nama' => 'Ika',
                'nuptk' => '0000123456789018',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "ika@gmail.com"
            ],[
                'id_mapel' => 9,
                'nama' => "Eko",
                'nuptk' => '0000123456789019',
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "eko@gmail.com",

            ],[
                'id_mapel' => 1,
                'nama' => 'Siti',
                'nuptk' => '0000123456789021',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "siti@gmail.com"
            ],[
                'id_mapel' => 2,
                'nama' => "Dyah",
                'nuptk' => '0000123456789022',
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "dyah@gmail.com",

            ],[
                'id_mapel' => 3,
                'nama' => 'Permata',
                'nuptk' => '0000123456789023',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "permata@gmail.com"
            ],[
                'id_mapel' => 5,
                'nama' => 'Lisa',
                'nuptk' => '0000123456789024',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "lisa@gmail.com"
            ],[
                'id_mapel' => 6,
                'nama' => 'Gilang',
                'nuptk' => '0000123456789025',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "gilang@gmail.com"
            ],[
                'id_mapel' => 8,
                'nama' => 'Tri',
                'nuptk' => '0000123456789026',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "tri@gmail.com"
            ],[
                'id_mapel' => 1,
                'nama' => 'Kris',
                'nuptk' => '0000123456789027',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "kris@gmail.com"
            ],[
                'id_mapel' => 4,
                'nama' => 'Salsa',
                'nuptk' => '0000123456789028',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "salsa@gmail.com"
            ]
        ];
        \DB::table('guru')->insert($guru);
    }
}
