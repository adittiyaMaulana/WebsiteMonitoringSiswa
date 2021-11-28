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
            ],[
                'nama' => 'Joko',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "joko@gmail.com"
            ],[
                'nama' => 'Susanto',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "susanto@gmail.com"
            ],[
                'nama' => 'David',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "david@gmail.com"
            ],[
                'nama' => 'Dyah',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "dyah@gmail.com"
            ],[
                'nama' => 'Sumarna',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "sumarna@gmail.com"
            ],[
                'nama' => 'Jaka',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "jaka@gmail.com"
            ],[
                'nama' => 'Bima',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "bima@gmail.com"
            ],[
                'nama' => 'Parjo',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "parjo@gmail.com"
            ],[
                'nama' => 'Krisno',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "krisno@gmail.com"
            ],[
                'nama' => 'Nadim',
                'ttl' => '1980-07-14',
                'alamat' => 'Jl. Cendrawasih, Cengkareng Barat',
                'email' => "nadim@gmail.com"
            ]
        ];
        \DB::table('orang_tua')->insert($orang_tua);
    }
}
