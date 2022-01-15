<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrangTuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orang_tua = [
            [
                'nama' => "Darmi",
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "darmidar511@gmail.com",

            ],[
                'nama' => 'Sutomo',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "sutomo@gmail.com"
            ],[
                'nama' => 'Joko',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "joko@gmail.com"
            ],[
                'nama' => "Santoso",
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "santoso@gmail.com",

            ],[
                'nama' => 'Dedi',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "dedi@gmail.com"
            ],[
                'nama' => 'Paijo',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "paijo@gmail.com"
            ],[
                'nama' => "Tono",
                'ttl' => '1980-07-13',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "tono@gmail.com",

            ],[
                'nama' => 'Burhan',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "burhan@gmail.com"
            ],[
                'nama' => 'Rian',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "rian@gmail.com"
            ]
        ];
        \DB::table('orang_tua')->insert($orang_tua);
    }
}
