<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrangTua;
use App\Models\Guru;
use App\Models\ProfilSiswa;
use App\Models\PusatUnduhan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
        //get email orang tua berdasar login
        $email_login = Auth::user()->email;

        $title         = 'Tabel Contoh';
      
        $label         = ["Nilai Tugas","Nilai UTS","Nilai UAS"];

        // $mapel[] = collect(DB::SELECT("SELECT b.nama 
        // from daftar_nilai a JOIN mata_pelajaran b ON a.id_mapel = b.id
        // where a.id_siswa=1"))->first()->nama;
  
        
        //get kelas siswa berdasar login orang tua
        $kelas_sekarang = collect(DB::SELECT("SELECT
        a.kelas
        FROM
        kelas a JOIN profil_siswa b ON a.id = b.id_kelas
        JOIN orang_tua c ON b.id_orang_tua = c.id 
        JOIN users d ON d.email = c.email WHERE c.email = '$email_login'"))->pluck('kelas');

        if($kelas_sekarang[0] == 7){
            $tugas[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_tugas) AS INT) nilai_tugas FROM 
            daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
            WHERE b.id = 1 AND c.id = 1"))->first()->nilai_tugas;
            
            $uts[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_uts) AS INT) nilai_uts FROM 
            daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
            WHERE b.id = 1 AND c.id = 1"))->first()->nilai_uts;

            $uas[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_uas) AS INT) nilai_uas FROM 
            daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
            WHERE b.id = 1 AND c.id = 1"))->first()->nilai_uas;
        }else if($kelas_sekarang[0] == 8){
            $tugas[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_tugas) AS INT) nilai_tugas FROM 
            daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
            WHERE b.id = 1 AND c.id = 1"))->first()->nilai_tugas;
            
            $uts[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_uts) AS INT) nilai_uts FROM 
            daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
            WHERE b.id = 1 AND c.id = 1"))->first()->nilai_uts;

            $uas[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_uas) AS INT) nilai_uas FROM 
            daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
            WHERE b.id = 1 AND c.id = 1"))->first()->nilai_uas;
        }else if($kelas_sekarang[0] == 9){
            $tugas[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_tugas) AS INT) nilai_tugas FROM 
            daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
            WHERE b.id = 1 AND c.id = 1"))->first()->nilai_tugas;
            
            $uts[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_uts) AS INT) nilai_uts FROM 
            daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
            WHERE b.id = 1 AND c.id = 1"))->first()->nilai_uts;

            $uas[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_uas) AS INT) nilai_uas FROM 
            daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
            WHERE b.id = 1 AND c.id = 1"))->first()->nilai_uas;
        }
        
        return view('orangTua.nilai',compact('title','label','tugas','uts','uas'));
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
