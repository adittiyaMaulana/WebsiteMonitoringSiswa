<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $berita = [
            [
                'judul' => 'Lorem Ipsum',
                'isi' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                 qui officia deserunt mollit anim id est laborum.",
                'foto' => "1640341902_jepang-umumkan-tidak-akan-kirim-delegasi-pemerintah-ke-olimpiade-beijing-2022.jpeg"
            ],[
                'judul' => 'Lorem Ipsum',
                'isi' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                 qui officia deserunt mollit anim id est laborum.",
                'foto' => "1640341902_jepang-umumkan-tidak-akan-kirim-delegasi-pemerintah-ke-olimpiade-beijing-2022.jpeg"
            ]
        ];
        \DB::table('berita')->insert($berita);
    }
}
