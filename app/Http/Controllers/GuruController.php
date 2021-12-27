<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kelas;
use App\Models\ProfilSiswa;
use App\Models\DaftarNilai;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function homepageGuru()
    {
        return view('guru.homepage');
    }

    // nilaiSiswa

    public function nilaiSiswa()
    {
        $kelas = Kelas::All();
        return view('guru.nilaiSiswa',compact('kelas'));
    }
    
   public function listsiswa(Request $request)
    {
       
        $siswa = ProfilSiswa::where('id_kelas',$request->id)->get(); 
        return view('guru.listsiswa', compact('siswa'));
    }
    
    public function listnilai(Request $request)
    {
       $nilai = DB::table('daftar_nilai')
                ->join('profil_siswa', 'daftar_nilai.id_siswa','=','profil_siswa.id')
                ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
                ->join('mata_pelajaran', 'mata_pelajaran.id', '=', 'daftar_nilai.id_mapel')
                ->select('mata_pelajaran.nama', 'daftar_nilai.nilai_tugas', 
                'daftar_nilai.nilai_uts', 'daftar_nilai.nilai_uas', 'daftar_nilai.kelas', 'daftar_nilai.semester')
                ->where('profil_siswa.id','=',$request->id)
                ->orderBy('daftar_nilai.kelas','desc')
                ->orderBy('daftar_nilai.semester','desc')
                ->get();
       $siswa = ProfilSiswa::where('id',$request->id)->first(); 
        return view('guru.listnilai', compact('nilai','siswa'));
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
