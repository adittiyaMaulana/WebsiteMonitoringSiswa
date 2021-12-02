<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrangTuaController extends Controller
{
    // homepage
    public function homepage()
    {
        return view('orangTua.homepage');
    }

    // jadwal Kelas
    public function jadwalKelas()
    {
        return view('orangTua.jadwalKelas');
    }

    // jadwal Non Akademik
    public function jadwalAkadanNonAkademik()
    {
        return view('orangTua.jadwalAkadanNonAkademik');
    }

    // finansial
    public function finansial()
    {
        return view('orangTua.finansial');
    }

    // berita
    public function berita()
    {
        return view('orangTua.berita');
    }

    public function beritaDetail()
    {
        return view('orangTua.beritaDetail');
    }

    // nilai
    public function nilai()
    {
        return view('orangTua.nilai');
    }

    // kehadiran
    public function kehadiran()
    {
        return view('orangTua.kehadiran');
    }

    // fitur Bantuan
    public function fiturBantuan()
    {
        return view('orangTua.fiturBantuan');
    }

    // tentang Sekolah
    public function tentangSekolah()
    {
        return view('orangTua.tentangSekolah');
    }

    // pusatbantuan
    public function saranDanMasukan()
    {
        return view('orangTua.saranDanMasukan');
    }

    // pesan
    public function pesan()
    {
        return view('orangTua.pesan');
    }
}
