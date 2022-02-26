<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrangTua;
use App\Models\Guru;
use App\Models\ProfilSiswa;
use App\Models\Absensi;
use App\Models\PusatUnduhan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\SaranDanMasukan;

class OrangTuaController extends Controller
{
    // homepage
    public function homepage()
    {


        // proses olah data nilai // START

        $nilai_7_1[] = 0;
        $nilai_7_2[] = 0;
        $nilai_8_1[] = 0;
        $nilai_8_2[] = 0;
        $nilai_9_1[] = 0;
        $nilai_9_2[] = 0;

        //get email orang tua berdasar login
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;

        $title         = 'Tabel Contoh';
      
        $label         = ["Kelas 7 Semester Ganjil","Kelas 7 Semester Genap","Kelas 8 Semester Ganjil",
                        "Kelas 8 Semester Genap","Kelas 9 Semester Ganjil","Kelas 9 Semester Genap",];
        
        //get kelas siswa berdasar login orang tua #
        $kelas_sekarang = collect(DB::SELECT("SELECT
        a.kelas
        FROM
        kelas a JOIN profil_siswa b ON a.id = b.id_kelas
        JOIN orang_tua c ON b.id_orang_tua = c.id 
        JOIN users d ON d.email = c.email WHERE c.email = '$email_login'"))->pluck('kelas');

        //get riwayat kelas siswa #
        $riwayat_kelas = collect(DB::SELECT("SELECT DISTINCT
        a.kelas        
        FROM
        daftar_nilai a JOIN detail_nilai b ON a.id = b.id_nilai
        JOIN profil_siswa c ON c.id = b.id_siswa
        JOIN orang_tua d ON c.id_orang_tua = d.id
        WHERE
        d.email = '$email_login'"))->pluck('kelas');

        //get semester siswa dalam suatu kelas #
        $riwayat_semester = collect(DB::SELECT("SELECT DISTINCT
        a.semester        
        FROM
        daftar_nilai a JOIN detail_nilai b ON a.id = b.id_nilai
        JOIN profil_siswa c ON c.id = b.id_siswa
        JOIN orang_tua d ON c.id_orang_tua = d.id
        WHERE
        d.email = '$email_login'"))->pluck('semester');

        //query untuk proses data nilai berdasarkan kelas

        //KELAS 7 SEMESTER 1
        try {

            //grafik nilai ###

            if($riwayat_kelas[0] == 7 && $riwayat_semester[0] == 1){
                $nilai_7_1[] = collect(DB::SELECT("SELECT 
                CAST(SUM(a.nilai_rata) / COUNT(e.id) AS INT) AS nilai        
                FROM
                daftar_nilai a JOIN detail_nilai b ON a.id = b.id_nilai
                JOIN profil_siswa c ON c.id = b.id_siswa
                JOIN orang_tua d ON c.id_orang_tua = d.id
                JOIN mata_pelajaran e ON e.id = b.id_mapel
                WHERE
                d.email = '$email_login'
                AND
                a.kelas = 7
                AND
                a.semester = 1"))->first()->nilai;
            }
          
          } catch (\Exception $e) {
                $nilai_7_1 = 0;
          }
          
        //KELAS 7 SEMESTER 2
          try {

            if($riwayat_kelas[0] == 7 && $riwayat_semester[1] == 2){

                $nilai_7_2[] = collect(DB::SELECT("SELECT 
                CAST(SUM(a.nilai_rata) / COUNT(e.id) AS INT) AS nilai        
                FROM
                daftar_nilai a JOIN detail_nilai b ON a.id = b.id_nilai
                JOIN profil_siswa c ON c.id = b.id_siswa
                JOIN orang_tua d ON c.id_orang_tua = d.id
                JOIN mata_pelajaran e ON e.id = b.id_mapel
                WHERE
                d.email = '$email_login'
                AND
                a.kelas = 7
                AND
                a.semester = 2"))->first()->nilai;
            }
          
          } catch (\Exception $e) {
                $nilai_7_2 = 0;
          }

          // //KELAS 8 SEMESTER 1
          try {
            if($riwayat_kelas[1] == 8 && $riwayat_semester[0] == 1){
                $nilai_8_1[] = collect(DB::SELECT("SELECT 
                CAST(SUM(a.nilai_rata) / COUNT(e.id) AS INT) AS nilai        
                FROM
                daftar_nilai a JOIN detail_nilai b ON a.id = b.id_nilai
                JOIN profil_siswa c ON c.id = b.id_siswa
                JOIN orang_tua d ON c.id_orang_tua = d.id
                JOIN mata_pelajaran e ON e.id = b.id_mapel
                WHERE
                d.email = '$email_login'
                AND
                a.kelas = 8
                AND
                a.semester = 1"))->first()->nilai;
            }
          
          } catch (\Exception $e) {
                $nilai_8_1 = 0;
          }
        

          // //KELAS 8 SEMESTER 2        
          try {

            if($riwayat_kelas[1] == 8 && $riwayat_semester[1] == 2){
                $nilai_8_2[] = collect(DB::SELECT("SELECT 
                CAST(SUM(a.nilai_rata) / COUNT(e.id) AS INT) AS nilai        
                FROM
                daftar_nilai a JOIN detail_nilai b ON a.id = b.id_nilai
                JOIN profil_siswa c ON c.id = b.id_siswa
                JOIN orang_tua d ON c.id_orang_tua = d.id
                JOIN mata_pelajaran e ON e.id = b.id_mapel
                WHERE
                d.email = '$email_login'
                AND
                a.kelas = 8
                AND
                a.semester = 2"))->first()->nilai;
            }
          } catch (\Exception $e) {
                $nilai_8_2 = 0;
          }

        // //KELAS 9 SEMESTER 1
          try {

            if($riwayat_kelas[2] == 9 && $riwayat_semester[0] == 1){
                $nilai_9_1[] = collect(DB::SELECT("SELECT 
                CAST(SUM(a.nilai_rata) / COUNT(e.id) AS INT) AS nilai        
                FROM
                daftar_nilai a JOIN detail_nilai b ON a.id = b.id_nilai
                JOIN profil_siswa c ON c.id = b.id_siswa
                JOIN orang_tua d ON c.id_orang_tua = d.id
                JOIN mata_pelajaran e ON e.id = b.id_mapel
                WHERE
                d.email = '$email_login'
                AND
                a.kelas = 9
                AND
                a.semester = 1"))->first()->nilai;
            }
          
          } catch (\Exception $e) {
                $nilai_9_1 = 0;
          }
        

        // //KELAS 9 SEMESTER 2
        try {

            if($riwayat_kelas[2] == 9 && $riwayat_semester[1] == 2){
                $nilai_9_2[] = collect(DB::SELECT("SELECT 
                CAST(SUM(a.nilai_rata) / COUNT(e.id) AS INT) AS nilai        
                FROM
                daftar_nilai a JOIN detail_nilai b ON a.id = b.id_nilai
                JOIN profil_siswa c ON c.id = b.id_siswa
                JOIN orang_tua d ON c.id_orang_tua = d.id
                JOIN mata_pelajaran e ON e.id = b.id_mapel
                WHERE
                d.email = '$email_login'
                AND
                a.kelas = 9
                AND
                a.semester = 2"))->first()->nilai;
            }
          
          } catch (\Exception $e) {
                $nilai_9_2 = 0;
          }

          //END ###

          //PROSES OLAHDATA FINANSIAL // START

          // menampilkan data yang belum terbayar #
            $finansial = DB::table('finansial')
            ->join('detail_finansial', 'detail_finansial.id_finansial','=','finansial.id')
            ->join('profil_siswa', 'profil_siswa.id', '=', 'detail_finansial.id_siswa')
            ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
            ->select('finansial.nama_bayaran', 'finansial.jumlah', 'detail_finansial.jatuh_tempo', 'detail_finansial.status')
            ->where('orang_tua.email','=',$email_login)
            ->where('detail_finansial.status', '=', 'belum terbayar')
            ->orderBy('finansial.nama_bayaran')
            ->orderBy('finansial.jumlah')
            ->orderBy('detail_finansial.jatuh_tempo')
            ->orderBy('detail_finansial.status')
            ->get();

          //END #
        
          //BERITA CAROUSEL
          
    	    $berita = Berita::paginate(5);

            $nis = DB::table('profil_siswa')
            ->join('orang_tua','orang_tua.id','profil_siswa.id')
            ->select('nis')
            ->where('orang_tua.email','=',"$email_login")
            ->get();
        
        return view('orangTua.homepage_ortu',compact('title','label',
        'nilai_7_1','nilai_7_2','nilai_8_1','nilai_8_2','nilai_9_1','nilai_9_2',
        'finansial',
        'email_login', 'username',
        'berita','nis'));
    }

    // jadwal Pelajaran
    public function jadwalPelajaran()
    {
        //get email orang tua berdasar login
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;

        //get jadwal pelajaran di kelas #
        $jadwal = DB::table('jadwal_pelajaran')
            ->join('detail_jadwal_pelajaran', 'detail_jadwal_pelajaran.id_jadwal','=','jadwal_pelajaran.id')
            ->join('profil_siswa', 'detail_jadwal_pelajaran.id_siswa','=','profil_siswa.id')
            ->join('mata_pelajaran', 'detail_jadwal_pelajaran.id_mapel', '=', 'mata_pelajaran.id')
            ->join('orang_tua','profil_siswa.id_orang_tua','=','orang_tua.id')
            ->select('mata_pelajaran.nama', 'mata_pelajaran.jenis', 'jadwal_pelajaran.jam_pelajaran', 'jadwal_pelajaran.hari')
            ->where('orang_tua.email','=',$email_login)
            ->where('jadwal_pelajaran.hari','=',"Senin")
            ->orderBy('mata_pelajaran.nama')
            ->orderBy('mata_pelajaran.jenis')
            ->orderBy('jadwal_pelajaran.jam_pelajaran')
            ->orderBy('jadwal_pelajaran.hari')
            ->get();
        return view('orangTua.jadwalPelajaran',compact('jadwal','username'));
    }

    public function filterjadwal($id){

        //get email orang tua berdasar login
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;

        //##
        if($id!=''){
            $jadwal = DB::table('jadwal_pelajaran')
            ->join('detail_jadwal_pelajaran', 'detail_jadwal_pelajaran.id_jadwal','=','jadwal_pelajaran.id')
            ->join('profil_siswa', 'detail_jadwal_pelajaran.id_siswa','=','profil_siswa.id')
            ->join('mata_pelajaran', 'detail_jadwal_pelajaran.id_mapel', '=', 'mata_pelajaran.id')
            ->join('orang_tua','profil_siswa.id_orang_tua','=','orang_tua.id')
            ->select('mata_pelajaran.nama', 'mata_pelajaran.jenis', 'jadwal_pelajaran.jam_pelajaran', 'jadwal_pelajaran.hari')
            ->where('orang_tua.email','=',$email_login)
            ->where('jadwal_pelajaran.hari','=',"$id")
            ->orderBy('mata_pelajaran.nama')
            ->orderBy('mata_pelajaran.jenis')
            ->orderBy('jadwal_pelajaran.jam_pelajaran')
            ->orderBy('jadwal_pelajaran.hari')
            ->get();
        }else{
            $jadwal = DB::table('jadwal_pelajaran')
            ->join('detail_jadwal_pelajaran', 'detail_jadwal_pelajaran.id_jadwal','=','jadwal_pelajaran.id')
            ->join('profil_siswa', 'detail_jadwal_pelajaran.id_siswa','=','profil_siswa.id')
            ->join('mata_pelajaran', 'detail_jadwal_pelajaran.id_mapel', '=', 'mata_pelajaran.id')
            ->join('orang_tua','profil_siswa.id_orang_tua','=','orang_tua.id')
            ->select('mata_pelajaran.nama', 'mata_pelajaran.jenis', 'jadwal_pelajaran.jam_pelajaran', 'jadwal_pelajaran.hari')
            ->where('orang_tua.email','=',$email_login)
            ->orderBy('mata_pelajaran.nama')
            ->orderBy('mata_pelajaran.jenis')
            ->orderBy('jadwal_pelajaran.jam_pelajaran')
            ->orderBy('jadwal_pelajaran.hari')
            ->get();
        }

        return $jadwal;
    }

    // kalender Akademik
    public function kalenderAkademik()
    {
        //##
        $username = Auth::user()->name;
        $jadwal = DB::table('kalender_akademik')
            ->select('nama_kegiatan','jadwal_kegiatan','periode')
            ->where('periode','=','2021 - 2022')
            ->get();
        return view('orangTua.kalenderAkademik',compact('jadwal','username'));
    }

    public function filterKalender($id){

        //##

        if($id!=''){
            $jadwal = DB::table('kalender_akademik')
                ->select('nama_kegiatan','jadwal_kegiatan','periode')
                ->where('periode','=',"$id")
                ->get();
        }else{
            $jadwal = DB::table('jadwal_akademik')
            ->select('nama_kegiatan','jadwal_kegiatan','periode')
            ->where('periode','=','2021 - 2022')
            ->get();
        }

        return $jadwal;
    }

    // finansial
    public function finansial()
    {
        //get email orang tua berdasar login
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;


        // menampilkan data yang belum terbayar##
        $finansial = DB::table('finansial')
            ->join('detail_finansial', 'detail_finansial.id_finansial','=','finansial.id')
            ->join('profil_siswa', 'profil_siswa.id', '=', 'detail_finansial.id_siswa')
            ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
            ->select('finansial.nama_bayaran', 'finansial.jumlah', 'detail_finansial.jatuh_tempo', 'detail_finansial.status')
            ->where('orang_tua.email','=',$email_login)
            ->where('detail_finansial.status', '=', 'belum terbayar')
            ->orderBy('finansial.nama_bayaran')
            ->orderBy('finansial.jumlah')
            ->orderBy('detail_finansial.jatuh_tempo')
            ->orderBy('detail_finansial.status')
            ->get();
        return view('orangTua.finansial', compact('finansial', 'username'));
    }

    //##
    public function filterfinansial($id){

        //get email orang tua berdasar login
        $email_login = Auth::user()->email;

  	 if($id!=''){
                $finansial = DB::table('finansial')
                ->join('detail_finansial', 'detail_finansial.id_finansial','=','finansial.id')
                ->join('profil_siswa', 'profil_siswa.id', '=', 'detail_finansial.id_siswa')
                ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
                ->select('finansial.nama_bayaran', 'finansial.jumlah', 'detail_finansial.jatuh_tempo', 'detail_finansial.status')
                ->where('orang_tua.email','=',$email_login)
                ->where('detail_finansial.status', '=', "$id")
                ->orderBy('finansial.nama_bayaran')
                ->orderBy('finansial.jumlah')
                ->orderBy('detail_finansial.jatuh_tempo')
                ->orderBy('detail_finansial.status')
                ->get();
		}else{
                $finansial = DB::table('finansial')
                ->join('detail_finansial', 'detail_finansial.id_finansial','=','finansial.id')
                ->join('profil_siswa', 'profil_siswa.id', '=', 'detail_finansial.id_siswa')
                ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
                ->select('finansial.nama_bayaran', 'finansial.jumlah', 'detail_finansial.jatuh_tempo', 'detail_finansial.status')
                ->where('orang_tua.email','=',$email_login)
                ->orderBy('finansial.nama_bayaran')
                ->orderBy('finansial.jumlah')
                ->orderBy('detail_finansial.jatuh_tempo')
                ->orderBy('detail_finansial.status')
                ->get();
		}
            return $finansial;
    }

    // berita##
    public function berita()
    {
    	$berita = Berita::All();
        $username = Auth::user()->name;

        return view('orangTua.berita',compact('berita','username'));
    }
    
    //##
     public function lihatberita(Request $request)
    {
        $username = Auth::user()->name;

        $berita = Berita::where('id',$request->id)->first(); 
        return view('orangTua.lihatberita', compact('berita','username'));
    }

    // nilai
    public function daftarNilai()
    {

        //get email orang tua berdasar login
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;


        //get riwayat kelas siswa#
        $riwayat_kelas = collect(DB::SELECT("SELECT DISTINCT
        e.kelas        
        FROM
        daftar_nilai a JOIN detail_nilai b ON a.id = b.id_nilai
        JOIN profil_siswa c ON c.id = b.id_siswa
        JOIN orang_tua d ON c.id_orang_tua = d.id
        JOIN kelas e ON e.id = c.id_kelas
        WHERE
        d.email = '$email_login'"))->pluck('kelas');

        //get semester siswa dalam suatu kelas#
        $riwayat_semester = collect(DB::SELECT("SELECT DISTINCT
        c.semester        
        FROM
        daftar_nilai a JOIN detail_nilai b ON a.id = b.id_nilai
        JOIN profil_siswa c ON c.id = b.id_siswa
        JOIN orang_tua d ON c.id_orang_tua = d.id
        WHERE
        d.email = '$email_login'"))->pluck('semester');

        $nilai = DB::table('daftar_nilai')
                ->join('detail_nilai', 'detail_nilai.id_nilai','=','daftar_nilai.id')
                ->join('profil_siswa', 'detail_nilai.id_siswa','=','profil_siswa.id')
                ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
                ->join('mata_pelajaran', 'mata_pelajaran.id', '=', 'detail_nilai.id_mapel')
                ->select('mata_pelajaran.nama', 'daftar_nilai.nilai_tugas', 
                'daftar_nilai.nilai_uts', 'daftar_nilai.nilai_uas', 'daftar_nilai.kelas', 'daftar_nilai.semester')
                ->where('orang_tua.email','=',"$email_login")
                ->where('daftar_nilai.kelas', '=', $riwayat_kelas)
                ->where('daftar_nilai.semester', '=', $riwayat_semester)
                ->orderBy('mata_pelajaran.nama')
                ->orderBy('daftar_nilai.nilai_tugas')
                ->orderBy('daftar_nilai.nilai_uts')
                ->orderBy('daftar_nilai.nilai_uas')
                ->orderBy('daftar_nilai.kelas')
                ->orderBy('daftar_nilai.semester')
                ->get();
        return view('orangTua.daftarNilai', compact('nilai','username'));
    }
    
    public function filternilai($id)
    {
        
        //get email orang tua berdasar login#
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;


        //get riwayat kelas siswa#
        $riwayat_kelas = collect(DB::SELECT("SELECT DISTINCT
        e.kelas        
        FROM
        daftar_nilai a JOIN detail_nilai b ON a.id = b.id_nilai
        JOIN profil_siswa c ON c.id = b.id_siswa
        JOIN orang_tua d ON c.id_orang_tua = d.id
        JOIN kelas e ON e.id = c.id_kelas
        WHERE
        d.email = '$email_login'"))->pluck('kelas');

        //get semester siswa dalam suatu kelas#
        $riwayat_semester = collect(DB::SELECT("SELECT DISTINCT
        c.semester        
        FROM
        daftar_nilai a JOIN detail_nilai b ON a.id = b.id_nilai
        JOIN profil_siswa c ON c.id = b.id_siswa
        JOIN orang_tua d ON c.id_orang_tua = d.id
        WHERE
        d.email = '$email_login'"))->pluck('semester');

    	if($id==0){
        $nilai = DB::table('daftar_nilai')
                ->join('detail_nilai', 'detail_nilai.id_nilai','=','daftar_nilai.id')
                ->join('profil_siswa', 'detail_nilai.id_siswa','=','profil_siswa.id')
                ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
                ->join('mata_pelajaran', 'mata_pelajaran.id', '=', 'detail_nilai.id_mapel')
                ->select('mata_pelajaran.nama', 'daftar_nilai.nilai_tugas', 
                'daftar_nilai.nilai_uts', 'daftar_nilai.nilai_uas', 'daftar_nilai.kelas', 'daftar_nilai.semester')
                ->where('orang_tua.email','=',$email_login)
                ->where('daftar_nilai.kelas', '=', $riwayat_kelas)
                ->where('daftar_nilai.semester', '=', $riwayat_semester)
                ->orderBy('mata_pelajaran.nama')
                ->orderBy('daftar_nilai.nilai_tugas')
                ->orderBy('daftar_nilai.nilai_uts')
                ->orderBy('daftar_nilai.nilai_uas')
                ->orderBy('daftar_nilai.kelas')
                ->orderBy('daftar_nilai.semester')
                ->get();
		}else{
			$string = "$id";
			$kelas = $string[0];
			$sem = $string[1]; 
			$nilai = DB::table('daftar_nilai')
                ->join('detail_nilai', 'detail_nilai.id_nilai','=','daftar_nilai.id')
                ->join('profil_siswa', 'detail_nilai.id_siswa','=','profil_siswa.id')
                ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
                ->join('mata_pelajaran', 'mata_pelajaran.id', '=', 'detail_nilai.id_mapel')
                ->select('mata_pelajaran.nama', 'daftar_nilai.nilai_tugas', 
                'daftar_nilai.nilai_uts', 'daftar_nilai.nilai_uas', 'daftar_nilai.kelas', 'daftar_nilai.semester')
                ->where('orang_tua.email','=',$email_login)
                ->where('daftar_nilai.kelas', '=', $kelas)
                ->where('daftar_nilai.semester', '=', $sem)
                ->orderBy('mata_pelajaran.nama')
                ->orderBy('daftar_nilai.nilai_tugas')
                ->orderBy('daftar_nilai.nilai_uts')
                ->orderBy('daftar_nilai.nilai_uas')
                ->orderBy('daftar_nilai.kelas')
                ->orderBy('daftar_nilai.semester')
                ->get();
		}
                
                
        return $nilai;
    }
    
    

    // kehadiran##
    public function absensi()
    {
        //get email orang tua berdasar login
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;


        $absensi = DB::table('absensi')
        ->join('detail_absensi','absensi.id','=','detail_absensi.id_absensi')
        ->join('profil_siswa','profil_siswa.id','=','detail_absensi.id_siswa')
        ->join('kelas','kelas.id','=','detail_absensi.id_kelas')
        ->join('orang_tua','orang_tua.id','=','profil_siswa.id_orang_tua')
        ->select('absensi.bulan','absensi.kehadiran','absensi.alpa','absensi.sakit','absensi.izin')
        ->where('orang_tua.email','=',$email_login)
        ->where('kelas.kelas','=',7)
        ->where('absensi.semester','=',1)
        ->orderBy('absensi.bulan')
        ->orderBy('absensi.kehadiran')
        ->orderBy('absensi.alpa')
        ->orderBy('absensi.sakit')
        ->orderBy('absensi.izin')
        ->get();
        return view('orangTua.absensi',compact('absensi','username'));
    }

    public function filterAbsensi($id){

        //get email orang tua berdasar login##
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;


  	    if($id==0){
            $absensi = DB::table('absensi')
            ->join('detail_absensi','absensi.id','=','detail_absensi.id_absensi')
            ->join('profil_siswa','profil_siswa.id','=','detail_absensi.id_siswa')
            ->join('kelas','kelas.id','=','detail_absensi.id_kelas')
            ->join('orang_tua','orang_tua.id','=','profil_siswa.id_orang_tua')
            ->select('absensi.bulan','absensi.kehadiran','absensi.alpa','absensi.sakit','absensi.izin')
            ->where('orang_tua.email','=',$email_login)
            ->where('kelas.kelas','=',7)
            ->where('absensi.semester','=',1)
            ->orderBy('absensi.bulan')
            ->orderBy('absensi.kehadiran')
            ->orderBy('absensi.alpa')
            ->orderBy('absensi.sakit')
            ->orderBy('absensi.izin')
            ->get();
		}else{
            $string = "$id";
			$kelas = $string[0];
			$semester = $string[1]; 

            $absensi = DB::table('absensi')
            ->join('detail_absensi','absensi.id','=','detail_absensi.id_absensi')
            ->join('profil_siswa','profil_siswa.id','=','detail_absensi.id_siswa')
            ->join('kelas','kelas.id','=','detail_absensi.id_kelas')
            ->join('orang_tua','orang_tua.id','=','profil_siswa.id_orang_tua')
            ->select('absensi.bulan','absensi.kehadiran','absensi.alpa','absensi.sakit','absensi.izin')
            ->where('orang_tua.email','=',$email_login)
            ->where('kelas.kelas','=',$kelas)
            ->where('absensi.semester','=',$semester)
            ->orderBy('absensi.bulan')
            ->orderBy('absensi.kehadiran')
            ->orderBy('absensi.alpa')
            ->orderBy('absensi.sakit')
            ->orderBy('absensi.izin')
            ->get();
		}
            return $absensi;
    }

    // fitur Bantuan##
    public function pusatUnduhan()
    {
    	$unduhan = PusatUnduhan::all();
        $username = Auth::user()->name;

        return view('orangTua.pusatUnduhan',compact('unduhan','username'));
    }
    
    // saranDanMasukan##
    public function saranDanMasukan()
    {
        $username = Auth::user()->name;

        return view('orangTua.saranDanMasukan',compact('username'));
    }

    public function sendSaranDanMasukan(Request $request){

        $id = Auth::user()->id;

        SaranDanMasukan::create([
                'id_user' => $id,
                'judul' => $request->judul,
                'isi' => $request->isi
		]);

        return redirect('orangTua/saranDanMasukan')->with('kirim', 'Saran dan Masukan Berhasil Dikrim');
    }
}
