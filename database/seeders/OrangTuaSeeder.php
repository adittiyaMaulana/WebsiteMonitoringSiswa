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
                'email' => "darmi@gmail.com",

            ],[
                'nama' => 'Sutomo',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "sutomo@gmail.com"
            ]
        ];
        \DB::table('orang_tua')->insert($orang_tua);
    }
}
