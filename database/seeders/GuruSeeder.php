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
                'nama' => "Nurul",
                'nuptk' => '0000123456789011',
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "nurul@gmail.com",

            ],[
                'nama' => 'Johar',
                'nuptk' => '0000123456789012',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "johar@gmail.com"
            ],[
                'nama' => "Isna",
                'nuptk' => '0000123456789013',
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "isna@gmail.com",

            ],[
                'nama' => 'Syamsul',
                'nuptk' => '0000123456789014',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "syamsul@gmail.com"
            ],[
                'nama' => "Nursyahria",
                'nuptk' => '0000123456789015',
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "nursyahria@gmail.com",

            ],[
                'nama' => 'Fajri',
                'nuptk' => '0000123456789016',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "fajri@gmail.com"
            ],[
                'nama' => "Leo",
                'nuptk' => '0000123456789017',
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "leo@gmail.com",

            ],[
                'nama' => 'Ika',
                'nuptk' => '0000123456789018',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "ika@gmail.com"
            ],[
                'nama' => "Eko",
                'nuptk' => '0000123456789019',
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "eko@gmail.com",

            ],[
                'nama' => 'Siti',
                'nuptk' => '0000123456789021',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "siti@gmail.com"
            ],[
                'nama' => "Dyah",
                'nuptk' => '0000123456789022',
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "dyah@gmail.com",

            ],[
                'nama' => 'Permata',
                'nuptk' => '0000123456789023',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "permata@gmail.com"
            ],[
                'nama' => 'Lisa',
                'nuptk' => '0000123456789024',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "lisa@gmail.com"
            ],[
                'nama' => 'Gilang',
                'nuptk' => '0000123456789025',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "gilang@gmail.com"
            ],[
                'nama' => 'Tri',
                'nuptk' => '0000123456789026',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "tri@gmail.com"
            ],[
                'nama' => 'Kris',
                'nuptk' => '0000123456789027',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "kris@gmail.com"
            ],[
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
