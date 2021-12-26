<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrangTua;
use App\Models\Guru;
use App\Models\ProfilSiswa;
use App\Models\Finansial;
use App\Models\PusatUnduhan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Berita;

class OrangTuaController extends Controller
{
    // homepage
    public function homepage()
    {
        
        $tugas_7_1[] = null;
        $tugas_7_2[] = null;
        $tugas_8_1[] = null;
        $tugas_8_2[] = null;
        $tugas_9_1[] = null;
        $tugas_9_2[] = null;

        $uts_7_1[] = null;
        $uts_7_2[] = null;
        $uts_8_1[] = null;
        $uts_8_2[] = null;
        $uts_9_1[] = null;
        $uts_9_2[] = null;

        $uas_7_1[] = null;
        $uas_7_2[] = null;
        $uas_8_1[] = null;
        $uas_8_2[] = null;
        $uas_9_1[] = null;
        $uas_9_2[] = null;

        //get email orang tua berdasar login
        $email_login = Auth::user()->email;

        $title         = 'Tabel Contoh';
      
        $label         = ["Nilai Tugas","Nilai UTS","Nilai UAS",
                        "Nilai Tugas","Nilai UTS","Nilai UAS",
                        "Nilai Tugas","Nilai UTS","Nilai UAS",
                        "Nilai Tugas","Nilai UTS","Nilai UAS",
                        "Nilai Tugas","Nilai UTS","Nilai UAS",
                        "Nilai Tugas","Nilai UTS","Nilai UAS"];
        
        //get kelas siswa berdasar login orang tua
        $kelas_sekarang = collect(DB::SELECT("SELECT
        a.kelas
        FROM
        kelas a JOIN profil_siswa b ON a.id = b.id_kelas
        JOIN orang_tua c ON b.id_orang_tua = c.id 
        JOIN users d ON d.email = c.email WHERE c.email = '$email_login'"))->pluck('kelas');

        //get riwayat kelas siswa
        $riwayat_kelas = collect(DB::SELECT("SELECT DISTINCT
        a.kelas
        FROM
        daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id
        JOIN orang_tua c ON b.id_orang_tua = c.id
        WHERE
        c.email = '$email_login'"))->pluck('kelas');

        //get semester siswa dalam suatu kelas
        $riwayat_semester = collect(DB::SELECT("SELECT DISTINCT
        a.semester
        FROM
        daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id
        JOIN orang_tua c ON b.id_orang_tua = c.id
        WHERE
        c.email = '$email_login'"))->pluck('semester');

        //query untuk proses data nilai berdasarkan kelas

        //KELAS 7 SEMESTER 1
        try {

            if($riwayat_kelas[0] == 7 && $riwayat_semester[0] == 1){
                $tugas_7_1[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_tugas) AS INT) nilai_tugas FROM 
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
                WHERE c.email = '$email_login' AND a.kelas = 7 AND a.semester = 1"))->first()->nilai_tugas;
                
                $uts_7_1[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_uts) AS INT) nilai_uts FROM 
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
                WHERE c.email = '$email_login' AND a.kelas = 7 AND a.semester = 1"))->first()->nilai_uts;
    
                $uas_7_1[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_uas) AS INT) nilai_uas FROM 
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
                WHERE c.email = '$email_login' AND a.kelas = 7 AND a.semester = 1"))->first()->nilai_uas;
            }
          
          } catch (\Exception $e) {
          
              
          }
          
        //KELAS 7 SEMESTER 2
          try {

            if($riwayat_kelas[0] == 7 && $riwayat_semester[1] == 2){
                $tugas_7_2[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_tugas) AS INT) nilai_tugas FROM 
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
                WHERE c.email = '$email_login' AND a.kelas = 7 AND a.semester = 2"))->first()->nilai_tugas;
                
                $uts_7_2[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_uts) AS INT) nilai_uts FROM 
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
                WHERE c.email = '$email_login' AND a.kelas = 7 AND a.semester = 2"))->first()->nilai_uts;

                $uas_7_2[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_uas) AS INT) nilai_uas FROM 
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
                WHERE c.email = '$email_login' AND a.kelas = 7 AND a.semester = 2"))->first()->nilai_uas;
            }
          
          } catch (\Exception $e) {
          
          }

          // //KELAS 8 SEMESTER 1
          try {
            if($riwayat_kelas[1] == 8 && $riwayat_semester[0] == 1){
                $tugas_8_1[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_tugas) AS INT) nilai_tugas FROM 
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
                WHERE c.email = '$email_login' AND a.kelas = 8 AND a.semester = 1"))->first()->nilai_tugas;
                
                $uts_8_1[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_uts) AS INT) nilai_uts FROM 
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
                WHERE c.email = '$email_login' AND a.kelas = 8 AND a.semester = 1"))->first()->nilai_uts;
    
                $uas_8_1[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_uas) AS INT) nilai_uas FROM 
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
                WHERE c.email = '$email_login' AND a.kelas = 8 AND a.semester = 1"))->first()->nilai_uas;
            }
          
          } catch (\Exception $e) {
          
          }
        

          // //KELAS 8 SEMESTER 2        
          try {

            if($riwayat_kelas[1] == 8 && $riwayat_semester[1] == 2){
                $tugas_8_2[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_tugas) AS INT) nilai_tugas FROM 
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
                WHERE c.email = '$email_login' AND a.kelas = 8 AND a.semester = 2"))->first()->nilai_tugas;
                
                $uts_8_2[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_uts) AS INT) nilai_uts FROM 
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
                WHERE c.email = '$email_login' AND a.kelas = 8 AND a.semester = 2"))->first()->nilai_uts;

                $uas_8_2[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_uas) AS INT) nilai_uas FROM 
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
                WHERE c.email = '$email_login' AND a.kelas = 8 AND a.semester = 2"))->first()->nilai_uas;
            }
          } catch (\Exception $e) {
          
          }

        // //KELAS 9 SEMESTER 1
          try {

            if($riwayat_kelas[2] == 9 && $riwayat_semester[0] == 1){
                $tugas_9_1[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_tugas) AS INT) nilai_tugas FROM 
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
                WHERE c.email = '$email_login' AND a.kelas = 9 AND a.semester = 1"))->first()->nilai_tugas;
                
                $uts_9_1[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_uts) AS INT) nilai_uts FROM 
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
                WHERE c.email = '$email_login' AND a.kelas = 9 AND a.semester = 1"))->first()->nilai_uts;
    
                $uas_9_1[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_uas) AS INT) nilai_uas FROM 
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
                WHERE c.email = '$email_login' AND a.kelas = 9 AND a.semester = 1"))->first()->nilai_uas;
            }
          
          } catch (\Exception $e) {
          
          }
        

        // //KELAS 9 SEMESTER 2
        try {

            if($riwayat_kelas[2] == 9 && $riwayat_semester[1] == 2){
                $tugas_9_2[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_tugas) AS INT) nilai_tugas FROM 
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
                WHERE c.email = '$email_login' AND a.kelas = 9 AND a.semester = 2"))->first()->nilai_tugas;
                
                $uts_9_2[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_uts) AS INT) nilai_uts FROM 
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
                WHERE c.email = '$email_login' AND a.kelas = 9 AND a.semester = 2"))->first()->nilai_uts;
    
                $uas_9_2[] = collect(DB::SELECT("SELECT CAST(AVG(a.nilai_uas) AS INT) nilai_uas FROM 
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id JOIN orang_tua c ON b.id_orang_tua = c.id 
                WHERE c.email = '$email_login' AND a.kelas = 9 AND a.semester = 2"))->first()->nilai_uas;
            }
          
          } catch (\Exception $e) {
          
          }
        
        
        return view('orangTua.homepage',compact('title','label',
        'tugas_7_1','tugas_7_2', 'tugas_8_1','tugas_8_2', 'tugas_9_1', 'tugas_9_2',
        'uts_7_1','uts_7_2','uts_8_1','uts_8_2','uts_9_1','uts_9_2',
        'uas_7_1','uas_7_2','uas_8_1','uas_8_2','uas_9_1','uas_9_2',));
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
        //get email orang tua berdasar login
        $email_login = Auth::user()->email;

        // menampilkan data yang sudah terbayar
        $paid = DB::table('finansial')
                ->join('profil_siswa', 'finansial.id_siswa','=','profil_siswa.id')
                ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
                ->select('finansial.nama_bayaran', 'finansial.jumlah', 'finansial.jatuh_tempo', 'finansial.status')
                ->where('orang_tua.email','=','darmi@gmail.com','AND',
                'finansial.status', '=', 'belum terbayar')
                ->get();

        // menampilkan data yang belum terbayar
        $unpaid = DB::table('finansial')
                ->join('profil_siswa', 'finansial.id_siswa','=','profil_siswa.id')
                ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
                ->select('finansial.nama_bayaran', 'finansial.jumlah', 'finansial.jatuh_tempo', 'finansial.status')
                ->where('orang_tua.email','=','darmi@gmail.com','AND',
                'finansial.status', '=', 'belum terbayar')
                ->get();
        return view('orangTua.finansial', compact('paid','unpaid'));
    }

    // berita
    public function berita()
    {
    	$berita = Berita::All();
        return view('orangTua.berita',compact('berita'));
    }
    
     public function lihatberita(Request $request)
    {
       
        $berita = Berita::where('id',$request->id)->first(); 
        return view('orangtua.lihatberita', compact('berita'));
    }

    public function beritaDetail()
    {
        return view('orangTua.beritaDetail');
    }

    // nilai
    public function nilai()
    {
        $nilai = DB::table('daftar_nilai')
                ->join('profil_siswa', 'daftar_nilai.id_siswa','=','profil_siswa.id')
                ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
                ->join('mata_pelajaran', 'mata_pelajaran.id', '=', 'daftar_nilai.id_mapel')
                ->select('mata_pelajaran.nama', 'daftar_nilai.nilai_tugas', 
                'daftar_nilai.nilai_uts', 'daftar_nilai.nilai_uas', 'daftar_nilai.kelas', 'daftar_nilai.semester')
                ->where('orang_tua.email','=','darmi@gmail.com')
                ->where('daftar_nilai.kelas', '=', 7)
                ->where('daftar_nilai.semester', '=', 1)
                ->get();
        return view('orangTua.nilai', compact('nilai'));
    }
    
    public function filternilai($id)
    {
    	if($id==0){
        $nilai = DB::table('daftar_nilai')
                ->join('profil_siswa', 'daftar_nilai.id_siswa','=','profil_siswa.id')
                ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
                ->join('mata_pelajaran', 'mata_pelajaran.id', '=', 'daftar_nilai.id_mapel')
                ->select('mata_pelajaran.nama', 'daftar_nilai.nilai_tugas', 
                'daftar_nilai.nilai_uts', 'daftar_nilai.nilai_uas', 'daftar_nilai.kelas', 'daftar_nilai.semester')
                ->where('orang_tua.email','=','darmi@gmail.com')
                ->where('daftar_nilai.kelas', '=', 7)
                ->where('daftar_nilai.semester', '=', 1)
                ->get();
		}else{
			$string = "$id";
			$kelas = $string[0];
			$sem = $string[1]; 
			$nilai = DB::table('daftar_nilai')
                ->join('profil_siswa', 'daftar_nilai.id_siswa','=','profil_siswa.id')
                ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
                ->join('mata_pelajaran', 'mata_pelajaran.id', '=', 'daftar_nilai.id_mapel')
                ->select('mata_pelajaran.nama', 'daftar_nilai.nilai_tugas', 
                'daftar_nilai.nilai_uts', 'daftar_nilai.nilai_uas', 'daftar_nilai.kelas', 'daftar_nilai.semester')
                ->where('orang_tua.email','=','darmi@gmail.com')
                ->where('daftar_nilai.kelas', '=', $kelas)
                ->where('daftar_nilai.semester', '=', $sem)
                ->get();
		}
                
                
        return $nilai;
    }
    
    

    // kehadiran
    public function kehadiran()
    {
        return view('orangTua.kehadiran');
    }

    // fitur Bantuan
    public function fiturBantuan()
    {
    	$unduhan = PusatUnduhan::all();
        return view('orangTua.fiturBantuan',compact('unduhan'));
    }

    // tentang Sekolah
    // public function tentangSekolah()
    // {
    //     return view('orangTua.tentangSekolah');
    // }

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
