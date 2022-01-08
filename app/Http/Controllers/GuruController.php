<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Absensi;
use Illuminate\Http\Request;
use App\Models\OrangTua;
use App\Models\Guru;
use App\Models\ProfilSiswa;
use App\Models\Finansial;
use App\Models\PusatUnduhan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Berita;
use App\Models\Kelas;

class GuruController extends Controller
{
    public function homepageGuru()
    {
         //get email guru berdasar login
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;

        $today = Carbon::now()->isoFormat('dddd');

        $jadwal_guru = DB::table('jadwal_guru')
        ->join('guru','guru.id','=','jadwal_guru.id_guru')
        ->join('mata_pelajaran','mata_pelajaran.id','=','jadwal_guru.id_mapel')
        ->join('kelas','kelas.id','=','jadwal_guru.id_kelas')
        ->select('jadwal_guru.hari','jadwal_guru.jam_pelajaran','mata_pelajaran.nama',
        'kelas.nama_kelas')
        ->where('guru.email','=',$email_login)
        ->where('jadwal_guru.hari','LIKE',$today)
        ->get();
        return view('guru.homepage',compact('jadwal_guru','today'));
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
        $kelas = Kelas::All();
        return view('guru.kehadiranSiswa', compact('kelas'));
    }

    public function listKehadiranSiswa(Request $request)
    {
       
        $siswa = ProfilSiswa::where('id_kelas',$request->id)->get(); 
        return view('guru.listKehadiranSiswa', compact('siswa'));
    }

    public function listKehadiran(Request $request){
        $absen = DB::table('absensi')
                ->join('profil_siswa', 'absensi.id_siswa','=','profil_siswa.id')
                ->select('absensi.bulan', 
                'absensi.kehadiran', 'absensi.alpa', 'absensi.sakit', 'absensi.izin')
                ->where('profil_siswa.id','=',$request->id)
                ->get();
       $siswa = ProfilSiswa::where('id',$request->id)->first(); 
       return view('guru.listKehadiran', compact('siswa','absen'));
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
        $jadwal = DB::table('jadwal_akademik')
                ->select('nama_kegiatan','jadwal_kegiatan')
                ->get();
        return view('guru.jadwalAkademikNonAkademik',compact('jadwal'));
    }

    public function jadwalGuru()
    {
        return view('guru.jadwalGuru');
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
