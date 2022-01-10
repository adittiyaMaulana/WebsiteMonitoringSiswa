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
use App\Models\SaranDanMasukan;

class OrangTuaController extends Controller
{
    // homepage
    public function homepage()
    {


        // proses olah data nilai // START

        $nilai_7_1[] = null;
        $nilai_7_2[] = null;
        $nilai_8_1[] = null;
        $nilai_8_2[] = null;
        $nilai_9_1[] = null;
        $nilai_9_2[] = null;

        //get email orang tua berdasar login
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;

        $title         = 'Tabel Contoh';
      
        $label         = ["Kelas 7 Semester Ganjil","Kelas 7 Semester Genap","Kelas 8 Semester Ganjil",
                        "Kelas 8 Semester Genap","Kelas 9 Semester Ganjil","Kelas 9 Semester Genap",];
        
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
                $nilai_7_1[] = collect(DB::SELECT("SELECT
                CAST((AVG(a.nilai_tugas) * 0.25) + (AVG(a.nilai_uts) * 0.35) + (AVG(a.nilai_uas) * 0.4) AS INT)
                AS nilai
                FROM
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id
                JOIN orang_tua c ON b.id_orang_tua = c.id
                JOIN mata_pelajaran d ON a.id_mapel = d.id
                JOIN kelas e ON b.id_kelas = e.id
                WHERE
                c.email = '$email_login'
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
                CAST((AVG(a.nilai_tugas) * 0.25) + (AVG(a.nilai_uts) * 0.35) + (AVG(a.nilai_uas) * 0.4) AS INT)
                AS nilai
                FROM
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id
                JOIN orang_tua c ON b.id_orang_tua = c.id
                JOIN mata_pelajaran d ON a.id_mapel = d.id
                JOIN kelas e ON b.id_kelas = e.id
                WHERE
                c.email = '$email_login'
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
                CAST((AVG(a.nilai_tugas) * 0.25) + (AVG(a.nilai_uts) * 0.35) + (AVG(a.nilai_uas) * 0.4) AS INT)
                AS nilai
                FROM
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id
                JOIN orang_tua c ON b.id_orang_tua = c.id
                JOIN mata_pelajaran d ON a.id_mapel = d.id
                JOIN kelas e ON b.id_kelas = e.id
                WHERE
                c.email = '$email_login'
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
                CAST((AVG(a.nilai_tugas) * 0.25) + (AVG(a.nilai_uts) * 0.35) + (AVG(a.nilai_uas) * 0.4) AS INT)
                AS nilai
                FROM
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id
                JOIN orang_tua c ON b.id_orang_tua = c.id
                JOIN mata_pelajaran d ON a.id_mapel = d.id
                JOIN kelas e ON b.id_kelas = e.id
                WHERE
                c.email = '$email_login'
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
                CAST((AVG(a.nilai_tugas) * 0.25) + (AVG(a.nilai_uts) * 0.35) + (AVG(a.nilai_uas) * 0.4) AS INT)
                AS nilai
                FROM
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id
                JOIN orang_tua c ON b.id_orang_tua = c.id
                JOIN mata_pelajaran d ON a.id_mapel = d.id
                JOIN kelas e ON b.id_kelas = e.id
                WHERE
                c.email = '$email_login'
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
                CAST((AVG(a.nilai_tugas) * 0.25) + (AVG(a.nilai_uts) * 0.35) + (AVG(a.nilai_uas) * 0.4) AS INT)
                AS nilai
                FROM
                daftar_nilai a JOIN profil_siswa b ON a.id_siswa = b.id
                JOIN orang_tua c ON b.id_orang_tua = c.id
                JOIN mata_pelajaran d ON a.id_mapel = d.id
                JOIN kelas e ON b.id_kelas = e.id
                WHERE
                c.email = '$email_login'
                AND
                a.kelas = 9
                AND
                a.semester = 2"))->first()->nilai;
            }
          
          } catch (\Exception $e) {
                $nilai_9_2 = 0;
          }

          //END

          //PROSES OLAHDATA FINANSIAL // START

          // menampilkan data yang belum terbayar
            $finansial = DB::table('finansial')
            ->join('profil_siswa', 'finansial.id_siswa','=','profil_siswa.id')
            ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
            ->select('finansial.nama_bayaran', 'finansial.jumlah', 'finansial.jatuh_tempo', 'finansial.status')
            ->where('orang_tua.email','=',$email_login)
            ->where('finansial.status', '=', 'belum terbayar')
            ->get();

          //END
        
          //BERITA CAROUSEL
          
    	    $berita = Berita::paginate(5);

            $nis = DB::table('profil_siswa')
            ->join('orang_tua','orang_tua.id','profil_siswa.id')
            ->select('nis')
            ->where('orang_tua.email','=',"$email_login")
            ->get();
        
        return view('orangTua.homepage',compact('title','label',
        'nilai_7_1','nilai_7_2','nilai_8_1','nilai_8_2','nilai_9_1','nilai_9_2',
        'finansial',
        'email_login', 'username',
        'berita','nis'));
    }

    // jadwal Pelajaran
    public function jadwalKelas()
    {
        //get email orang tua berdasar login
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;

        //get jadwal pelajaran di kelas
        $jadwal = DB::table('jadwal_pelajaran')
            ->join('profil_siswa', 'jadwal_pelajaran.id_siswa','=','profil_siswa.id')
            ->join('mata_pelajaran', 'jadwal_pelajaran.id_mapel', '=', 'mata_pelajaran.id')
            ->join('orang_tua','profil_siswa.id_orang_tua','=','orang_tua.id')
            ->select('mata_pelajaran.nama', 'mata_pelajaran.jenis', 'jadwal_pelajaran.jam_pelajaran', 'jadwal_pelajaran.hari')
            ->where('orang_tua.email','=',$email_login)
            ->where('jadwal_pelajaran.hari','=',"Senin")
            ->get();
        return view('orangTua.jadwalKelas',compact('jadwal','username'));
    }

    public function filterjadwal($id){

        //get email orang tua berdasar login
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;


        if($id!=''){
            $jadwal = DB::table('jadwal_pelajaran')
            ->join('profil_siswa', 'jadwal_pelajaran.id_siswa','=','profil_siswa.id')
            ->join('mata_pelajaran', 'jadwal_pelajaran.id_mapel', '=', 'mata_pelajaran.id')
            ->join('orang_tua','profil_siswa.id_orang_tua','=','orang_tua.id')
            ->select('mata_pelajaran.nama', 'mata_pelajaran.jenis', 'jadwal_pelajaran.jam_pelajaran', 'jadwal_pelajaran.hari')
            ->where('orang_tua.email','=',"$email_login")
            ->where('jadwal_pelajaran.hari','=',"$id")
            ->get();
        }else{
            $jadwal = DB::table('jadwal_pelajaran')
            ->join('profil_siswa', 'jadwal_pelajaran.id_siswa','=','profil_siswa.id')
            ->join('mata_pelajaran', 'jadwal_pelajaran.id_mapel', '=', 'mata_pelajaran.id')
            ->join('orang_tua','profil_siswa.id_orang_tua','=','orang_tua.id')
            ->select('mata_pelajaran.nama', 'mata_pelajaran.jenis', 'jadwal_pelajaran.jam_pelajaran', 'jadwal_pelajaran.hari')
            ->where('orang_tua.email','=',"$email_login")
            ->get();
        }

        return $jadwal;
    }

    // jadwal Non Akademik
    public function jadwalAkadanNonAkademik()
    {

        $username = Auth::user()->name;

        $jadwal = DB::table('jadwal_akademik')
                ->select('nama_kegiatan','jadwal_kegiatan')
                ->get();
        return view('orangTua.jadwalAkadanNonAkademik',compact('jadwal','username'));
    }

    // finansial
    public function finansial()
    {
        //get email orang tua berdasar login
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;


        // menampilkan data yang belum terbayar
        $finansial = DB::table('finansial')
                ->join('profil_siswa', 'finansial.id_siswa','=','profil_siswa.id')
                ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
                ->select('finansial.nama_bayaran', 'finansial.jumlah', 'finansial.jatuh_tempo', 'finansial.status')
                ->where('orang_tua.email','=',$email_login)
                ->where('finansial.status', '=', "terbayar")
                ->get();
        return view('orangTua.finansial', compact('finansial', 'username'));
    }

    public function filterfinansial($id){

        //get email orang tua berdasar login
        $email_login = Auth::user()->email;

  	 if($id!=''){
                $finansial = DB::table('finansial')
                ->join('profil_siswa', 'finansial.id_siswa','=','profil_siswa.id')
                ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
                ->select('finansial.nama_bayaran', 'finansial.jumlah', 'finansial.jatuh_tempo', 'finansial.status')
                ->where('orang_tua.email','=',$email_login)
                ->where('finansial.status', '=', "$id")
                ->get();
		}else{
			 $finansial = DB::table('finansial')
                ->join('profil_siswa', 'finansial.id_siswa','=','profil_siswa.id')
                ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
                ->select('finansial.nama_bayaran', 'finansial.jumlah', 'finansial.jatuh_tempo', 'finansial.status')
                ->where('orang_tua.email','=',$email_login)
                ->get();
		}
            return $finansial;
    }

    // berita
    public function berita()
    {
    	$berita = Berita::All();
        $username = Auth::user()->name;

        return view('orangTua.berita',compact('berita','username'));
    }
    
     public function lihatberita(Request $request)
    {
        $username = Auth::user()->name;

        $berita = Berita::where('id',$request->id)->first(); 
        return view('orangTua.lihatberita', compact('berita','username'));
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
        $username = Auth::user()->name;


        //get riwayat kelas siswa
        $riwayat_kelas = collect(DB::SELECT("SELECT
        kelas.kelas
        FROM
        profil_siswa JOIN kelas ON profil_siswa.id_kelas = kelas.id
        JOIN orang_tua ON profil_siswa.id_orang_tua = orang_tua.id
        WHERE
        orang_tua.email = '$email_login'"))->pluck('kelas');

        //get semester siswa dalam suatu kelas
        $riwayat_semester = collect(DB::SELECT("SELECT
        profil_siswa.semester
        FROM
        profil_siswa JOIN kelas ON profil_siswa.id_kelas = kelas.id
        JOIN orang_tua ON profil_siswa.id_orang_tua = orang_tua.id
        WHERE
        orang_tua.email = '$email_login'"))->pluck('semester');

        $nilai = DB::table('daftar_nilai')
                ->join('profil_siswa', 'daftar_nilai.id_siswa','=','profil_siswa.id')
                ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
                ->join('mata_pelajaran', 'mata_pelajaran.id', '=', 'daftar_nilai.id_mapel')
                ->select('mata_pelajaran.nama', 'daftar_nilai.nilai_tugas', 
                'daftar_nilai.nilai_uts', 'daftar_nilai.nilai_uas', 'daftar_nilai.kelas', 'daftar_nilai.semester')
                ->where('orang_tua.email','=',$email_login)
                ->where('daftar_nilai.kelas', '=', $riwayat_kelas)
                ->where('daftar_nilai.semester', '=', $riwayat_semester)
                ->get();
        return view('orangTua.nilai', compact('nilai','username'));
    }
    
    public function filternilai($id)
    {
        
        //get email orang tua berdasar login
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;


        //get riwayat kelas siswa
        $riwayat_kelas = collect(DB::SELECT("SELECT
        kelas.kelas
        FROM
        profil_siswa JOIN kelas ON profil_siswa.id_kelas = kelas.id
        JOIN orang_tua ON profil_siswa.id_orang_tua = orang_tua.id
        WHERE
        orang_tua.email = '$email_login'"))->pluck('kelas');

        //get semester siswa dalam suatu kelas
        $riwayat_semester = collect(DB::SELECT("SELECT
        profil_siswa.semester
        FROM
        profil_siswa JOIN kelas ON profil_siswa.id_kelas = kelas.id
        JOIN orang_tua ON profil_siswa.id_orang_tua = orang_tua.id
        WHERE
        orang_tua.email = '$email_login'"))->pluck('semester');

    	if($id==0){
        $nilai = DB::table('daftar_nilai')
                ->join('profil_siswa', 'daftar_nilai.id_siswa','=','profil_siswa.id')
                ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
                ->join('mata_pelajaran', 'mata_pelajaran.id', '=', 'daftar_nilai.id_mapel')
                ->select('mata_pelajaran.nama', 'daftar_nilai.nilai_tugas', 
                'daftar_nilai.nilai_uts', 'daftar_nilai.nilai_uas', 'daftar_nilai.kelas', 'daftar_nilai.semester')
                ->where('orang_tua.email','=',$email_login)
                ->where('daftar_nilai.kelas', '=', $riwayat_kelas)
                ->where('daftar_nilai.semester', '=', $riwayat_semester)
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
                ->where('orang_tua.email','=',$email_login)
                ->where('daftar_nilai.kelas', '=', $kelas)
                ->where('daftar_nilai.semester', '=', $sem)
                ->get();
		}
                
                
        return $nilai;
    }
    
    

    // kehadiran
    public function kehadiran()
    {
        //get email orang tua berdasar login
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;


        $absensi = DB::table('absensi')
        ->join('profil_siswa','profil_siswa.id','=','absensi.id_siswa')
        ->join('kelas','kelas.id','=','absensi.id_kelas')
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
        return view('orangTua.kehadiran',compact('absensi','username'));
    }

    public function filterabsensi($id){

        //get email orang tua berdasar login
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;


  	    if($id==0){
            $absensi = DB::table('absensi')
            ->join('profil_siswa','profil_siswa.id','=','absensi.id_siswa')
            ->join('kelas','kelas.id','=','absensi.id_kelas')
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
            ->join('profil_siswa','profil_siswa.id','=','absensi.id_siswa')
            ->join('kelas','kelas.id','=','absensi.id_kelas')
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

    // fitur Bantuan
    public function fiturBantuan()
    {
    	$unduhan = PusatUnduhan::all();
        $username = Auth::user()->name;

        return view('orangTua.fiturBantuan',compact('unduhan','username'));
    }
    
    // pusatbantuan
    public function saranDanMasukan()
    {
        $username = Auth::user()->name;

        return view('orangTua.saranDanMasukan',compact('username'));
    }

    public function sendSaranMasukan(Request $request){

        $id = Auth::user()->id;

        SaranDanMasukan::create([
                'id_user' => $id,
                'judul' => $request->judul,
                'isi' => $request->isi
		]);

        return redirect('orangTua/saranDanMasukan');
    }

    // pesan
    public function pesan()
    {
        
        return view('orangTua.pesan');
    }
}
