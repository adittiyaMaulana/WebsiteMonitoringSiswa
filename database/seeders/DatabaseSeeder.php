<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OrangTuaSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(MataPelajaranSeeder::class);
        $this->call(ProfilSiswaSeeder::class);
        $this->call(DaftarNilaiSeeder::class);
        $this->call(FinansialSeeder::class);
        $this->call(BeritaSeeder::class);
        $this->call(JadwalAkademikDanNonAkademikSeeder::class);
        $this->call(JadwalPelajaranSeeder::class);
        $this->call(AbsensiSeeder::class);
    }
}