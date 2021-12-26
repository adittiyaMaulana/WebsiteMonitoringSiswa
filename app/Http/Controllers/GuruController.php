<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

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
    	$unduhan = PusatUnduhan::all();
        return view('guru.fiturBantuan',compact('unduhan'));
    }
    
    // jadwal
    public function jadwalAkadaNonAkaGuru()
    {
        return view('guru.jadwalAkademikNonAkademik');
    }
    
    // informasi
    public function beritaGuru()
    {
       $berita = Berita::All();
        return view('guru.berita',compact('berita'));
    }
    
     public function lihatberita(Request $request)
    {
       
        $berita = Berita::where('id',$request->id)->first(); 
        return view('guru.lihatberita', compact('berita'));
    }
    
    public function beritaDetailGuru()
    {
        return view('guru.beritaDetail');
        
    }


}
