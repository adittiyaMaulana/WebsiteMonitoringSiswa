<?php

namespace Database\Seeders;

use App\Models\DetailAbsensi;
use App\Models\DetailFinansial;
use App\Models\DetailNilai;
use App\Models\JadwalMengajar;
use App\Models\KalenderAkademik;
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
        $this->call(MataPelajaranSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(FotoSeeder::class);
        $this->call(ProfilSiswaSeeder::class);
        $this->call(DaftarNilaiSeeder::class);
        $this->call(FinansialSeeder::class);
        $this->call(BeritaSeeder::class);
        $this->call(KalenderAkademikSeeder::class);
        $this->call(JadwalPelajaranSeeder::class);
        $this->call(AbsensiSeeder::class);
        $this->call(JadwalMengajarSeeder::class);
        $this->call(DetailNilaiSeeeder::class);
        $this->call(DetailAbsensiSeeeder::class);
        $this->call(DetailFinansialSeeeder::class);
        $this->call(DetailJadwalMengajarSeeeder::class);
        $this->call(DetailJadwalPelajaranSeeeder::class);
    }
}