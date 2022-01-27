<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Absensi;
use Illuminate\Http\Request;
use App\Models\OrangTua;
use App\Models\Guru;
use App\Models\ProfilSiswa;
use App\Models\SaranDanMasukan;
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

        $nuptk = DB::table('guru')
        ->select('nuptk')
        ->where('email','=',"$email_login")
        ->get();

        $jadwal_guru = DB::table('jadwal_guru')
        ->join('guru','guru.id','=','jadwal_guru.id_guru')
        ->join('mata_pelajaran','mata_pelajaran.id','=','jadwal_guru.id_mapel')
        ->join('kelas','kelas.id','=','jadwal_guru.id_kelas')
        ->select('jadwal_guru.hari','jadwal_guru.jam_pelajaran','mata_pelajaran.nama',
        'kelas.nama_kelas')
        ->where('guru.email','=',$email_login)
        ->where('jadwal_guru.hari','LIKE',$today)
        ->paginate(5);
        return view('guru.homepage',compact('jadwal_guru','today','username','email_login','nuptk'));
    }

    // nilaiSiswa

    public function nilaiSiswa()
    {
        $username = Auth::user()->name;
        $kelas = Kelas::All();
        $username = Auth::user()->name;

        return view('guru.nilaiSiswa',compact('kelas','username'));
    }
    
   public function listsiswa(Request $request)
    {
        $username = Auth::user()->name;
        $siswa = ProfilSiswa::where('id_kelas',$request->id)->get(); 
        return view('guru.listsiswa', compact('siswa','username'));
    }
    
    public function listnilai(Request $request)
    {

        $username = Auth::user()->name;

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
        return view('guru.listnilai', compact('nilai','siswa','username'));
    }

    public function updateNilaiSiswa()
    {
        return view('guru.form.formUpdateNilai');
    }
    
    // kehadiran siswa
    public function kehadiranSiswa()
    {
        $username = Auth::user()->name;
        $kelas = Kelas::All();
        $username = Auth::user()->name;

        return view('guru.kehadiranSiswa', compact('kelas','username'));
    }

    public function listKehadiranSiswa(Request $request)
    {
        $username = Auth::user()->name;
       
        $siswa = ProfilSiswa::where('id_kelas',$request->id)->get(); 
        $username = Auth::user()->name;

        return view('guru.listKehadiranSiswa', compact('siswa','username'));
    }

    public function listKehadiran(Request $request){

        $username = Auth::user()->name;

        $absen = DB::table('absensi')
                ->join('profil_siswa', 'absensi.id_siswa','=','profil_siswa.id')
                ->select('absensi.bulan', 
                'absensi.kehadiran', 'absensi.alpa', 'absensi.sakit', 'absensi.izin')
                ->where('profil_siswa.id','=',$request->id)
                ->get();
       $siswa = ProfilSiswa::where('id',$request->id)->first(); 
       return view('guru.listKehadiran', compact('siswa','absen','username'));
    }

    public function updatekehadiranSiswa()
    {
        return view('guru.form.formUpdateKehadiran');
    }

    public function saranDanMasukanGuru()
    {
        $username = Auth::user()->name;
        return view('guru.saranDanMasukanGuru', compact('username'));
    }

    public function sendSaranMasukan(Request $request){
        $id = Auth::user()->id;

        SaranDanMasukan::create([
                'id_user' => $id,
                'judul' => $request->judul,
                'isi' => $request->isi
		]);

        return redirect('guru/saranDanMasukanGuru')->with('kirim', 'Saran dan Masukan Berhasil Dikrim');
    }
    
    // pesan
    public function pesanGuru()
    {
        return view('guru.pesan');
    }
    
    // fitur bantuan
    public function pusatBantuanGuru()
    {
        $username = Auth::user()->name;
    	$unduhan = PusatUnduhan::all();
        $username = Auth::user()->name;

        return view('guru.fiturBantuan',compact('unduhan','username'));
    }
    
    // jadwal
    public function jadwalAkadaNonAkaGuru()
    {
        $username = Auth::user()->name;
        $jadwal = DB::table('jadwal_akademik')
            ->select('nama_kegiatan','jadwal_kegiatan','periode')
            ->where('periode','=','2021 - 2022')
            ->get();
        return view('guru.jadwalAkademikNonAkademik',compact('jadwal','username'));
    }

    public function filterJadwalAkaNonAka($id){

        //get email orang tua berdasar login

        if($id!=''){
            $jadwal = DB::table('jadwal_akademik')
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

    public function jadwalGuru()
    {
        //get email orang tua berdasar login
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;

        $today = Carbon::now()->isoFormat('dddd');

        if ($today == 'Sabtu'){
            $jadwal_guru = DB::table('jadwal_guru')
            ->join('guru','guru.id','=','jadwal_guru.id_guru')
            ->join('mata_pelajaran','mata_pelajaran.id','=','jadwal_guru.id_mapel')
            ->join('kelas','kelas.id','=','jadwal_guru.id_kelas')
            ->select('jadwal_guru.hari','jadwal_guru.jam_pelajaran','mata_pelajaran.nama',
            'kelas.nama_kelas')
            ->where('guru.email','=',$email_login)
            ->where('jadwal_guru.hari','LIKE','Jumat')
            ->get();
        } else if ($today == 'Minggu'){
            $jadwal_guru = DB::table('jadwal_guru')
            ->join('guru','guru.id','=','jadwal_guru.id_guru')
            ->join('mata_pelajaran','mata_pelajaran.id','=','jadwal_guru.id_mapel')
            ->join('kelas','kelas.id','=','jadwal_guru.id_kelas')
            ->select('jadwal_guru.hari','jadwal_guru.jam_pelajaran','mata_pelajaran.nama',
            'kelas.nama_kelas')
            ->where('guru.email','=',$email_login)
            ->where('jadwal_guru.hari','LIKE','Jumat')
            ->get();
        } else{
            $jadwal_guru = DB::table('jadwal_guru')
            ->join('guru','guru.id','=','jadwal_guru.id_guru')
            ->join('mata_pelajaran','mata_pelajaran.id','=','jadwal_guru.id_mapel')
            ->join('kelas','kelas.id','=','jadwal_guru.id_kelas')
            ->select('jadwal_guru.hari','jadwal_guru.jam_pelajaran','mata_pelajaran.nama',
            'kelas.nama_kelas')
            ->where('guru.email','=',$email_login)
            ->where('jadwal_guru.hari','LIKE',$today)
            ->get();
        }

        return view('guru.jadwalGuru', compact('jadwal_guru','username'));
    }
    
    public function filterJadwalGuru($id){
        //get email orang tua berdasar login
        $email_login = Auth::user()->email;
        $today = Carbon::now()->isoFormat('dddd');

        if($id!=''){
            $jadwal_guru = DB::table('jadwal_guru')
            ->join('guru','guru.id','=','jadwal_guru.id_guru')
            ->join('mata_pelajaran','mata_pelajaran.id','=','jadwal_guru.id_mapel')
            ->join('kelas','kelas.id','=','jadwal_guru.id_kelas')
            ->select('jadwal_guru.hari','jadwal_guru.jam_pelajaran','mata_pelajaran.nama',
            'kelas.nama_kelas')
            ->where('guru.email','=',$email_login)
            ->where('jadwal_guru.hari','LIKE',$id)
            ->get();
        }else{
        if ($today == 'Sabtu'){
            $jadwal_guru = DB::table('jadwal_guru')
            ->join('guru','guru.id','=','jadwal_guru.id_guru')
            ->join('mata_pelajaran','mata_pelajaran.id','=','jadwal_guru.id_mapel')
            ->join('kelas','kelas.id','=','jadwal_guru.id_kelas')
            ->select('jadwal_guru.hari','jadwal_guru.jam_pelajaran','mata_pelajaran.nama',
            'kelas.nama_kelas')
            ->where('guru.email','=',$email_login)
            ->where('jadwal_guru.hari','LIKE','Jumat')
            ->get();
        } else if ($today == 'Minggu'){
            $jadwal_guru = DB::table('jadwal_guru')
            ->join('guru','guru.id','=','jadwal_guru.id_guru')
            ->join('mata_pelajaran','mata_pelajaran.id','=','jadwal_guru.id_mapel')
            ->join('kelas','kelas.id','=','jadwal_guru.id_kelas')
            ->select('jadwal_guru.hari','jadwal_guru.jam_pelajaran','mata_pelajaran.nama',
            'kelas.nama_kelas')
            ->where('guru.email','=',$email_login)
            ->where('jadwal_guru.hari','LIKE','Jumat')
            ->get();
        } else{
            $jadwal_guru = DB::table('jadwal_guru')
            ->join('guru','guru.id','=','jadwal_guru.id_guru')
            ->join('mata_pelajaran','mata_pelajaran.id','=','jadwal_guru.id_mapel')
            ->join('kelas','kelas.id','=','jadwal_guru.id_kelas')
            ->select('jadwal_guru.hari','jadwal_guru.jam_pelajaran','mata_pelajaran.nama',
            'kelas.nama_kelas')
            ->where('guru.email','=',$email_login)
            ->where('jadwal_guru.hari','LIKE',$today)
            ->get();
        }
    }
        return $jadwal_guru;
    }

    // informasi
    public function beritaGuru()
    {
        $username = Auth::user()->name;
        $berita = Berita::All();
        return view('guru.berita',compact('berita','username'));
    }
    
     public function lihatberita(Request $request)
    {
        $username = Auth::user()->name;

        $berita = Berita::where('id',$request->id)->first(); 
        return view('guru.lihatberita', compact('berita','username'));
    }
    
    public function beritaDetailGuru()
    {
        return view('guru.beritaDetail');
    }

}
