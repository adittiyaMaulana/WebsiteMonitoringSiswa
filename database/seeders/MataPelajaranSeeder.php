<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mata_pelajaran = [
            [
                'nama' => "B. Indonesia",
                'jenis' => "Non-Eksak"
            ],[
                'nama' => "B. Inggris",
                'jenis' => "Non-Eksak"
            ],[
                'nama' => "Matematika",
                'jenis' => "Eksak"
            ],[
                'nama' => "Ilmu Pengetahuan Sosial",
                'jenis' => "Non-Eksak"
            ],[
                'nama' => "Ilmu Pengetahuan Alam",
                'jenis' => "Eksak"
            ],[
                'nama' => "Seni Budaya Dan Keterampilan",
                'jenis' => "Non-Eksak"
            ],[
                'nama' => "Pendidikan Agama",
                'jenis' => "Non-Eksak"
            ],[
                'nama' => "Pendidikan Kewarganegaraan",
                'jenis' => "Non-Eksak"
            ],[
                'nama' => "Pendidikan Jasmani dan Olahraga",
                'jenis' => "Non-Eksak"
            ]
        ];
        \DB::table('mata_pelajaran')->insert($mata_pelajaran);
    }
}
