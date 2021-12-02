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
    
    // pesan
    public function pesanGuru()
    {
        return view('guru.pesan');
    }
    
    // fitur bantuan
    public function pusatBantuanGuru()
    {
        return view('guru.fiturBantuan');
    }
    
    // jadwal
    public function jadwalAkadaNonAkaGuru()
    {
        return view('guru.jadwalAkademikNonAkademik');
    }
    
    // informasi
    public function beritaGuru()
    {
        return view('guru.berita');
    }
    
    public function beritaDetailGuru()
    {
        return view('guru.beritaDetail');
        
    }


}
