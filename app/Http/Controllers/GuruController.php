<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function homepageGuru()
    {
        return view('guru.homepage');
    }

    // nilaiSiswa

    public function nilaiSiswa()
    {
        return view('guru.nilaiSiswa');
    }

    public function updateNilaiSiswa()
    {
        return view('guru.form.formUpdateNilai');
    }

    // kehadiran siswa
    public function kehadiranSiswa()
    {
        return view('guru.kehadiranSiswa');
    }

    public function updatekehadiranSiswa()
    {
        return view('guru.form.formUpdateKehadiran');
    }

    public function saranDanMasukanGuru()
    {
        return view('guru.saranDanMasukanGuru');
    }
}
