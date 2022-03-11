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
    public function homepage()
    {
         //get email guru berdasar login
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;
        $today = Carbon::now()->isoFormat('dddd');

        $nuptk = DB::table('guru')
        ->select('nuptk')
        ->where('email','=',"$email_login")
        ->get();

        //##
        $jadwal_mengajar = DB::table('jadwal_mengajar')
        ->join('detail_jadwal_mengajar','jadwal_mengajar.id','=','detail_jadwal_mengajar.id_jadwal')
        ->join('guru','guru.id','=','detail_jadwal_mengajar.id_guru')
        ->join('mata_pelajaran','mata_pelajaran.id','=','detail_jadwal_mengajar.id_mapel')
        ->join('kelas','kelas.id','=','detail_jadwal_mengajar.id_kelas')
        ->select('jadwal_mengajar.hari','jadwal_mengajar.jam_pelajaran','mata_pelajaran.nama',
        'kelas.nama_kelas')
        ->where('guru.email','=',$email_login)
        ->where('jadwal_mengajar.hari','LIKE',$today)
        ->paginate(5);
        return view('guru.homepage_guru',compact('jadwal_mengajar','today','username','email_login','nuptk'));
    }

    // nilaiSiswa##

    public function daftarKelas_nilai()
    {
        $username = Auth::user()->name;
        $kelas = Kelas::All();
        $username = Auth::user()->name;

        return view('guru.daftarKelas_nilai',compact('kelas','username'));
    }
    
   public function daftarSiswa_nilai(Request $request)
    {
        $username = Auth::user()->name;
        $siswa = ProfilSiswa::where('id_kelas',$request->id)->get(); 
        return view('guru.daftarSiswa_nilai', compact('siswa','username'));
    }
    
    public function daftarNilai_nilai(Request $request)
    {

        $username = Auth::user()->name;

       $nilai = DB::table('daftar_nilai')
                ->join('detail_nilai', 'detail_nilai.id_nilai','=','daftar_nilai.id')
                ->join('profil_siswa', 'detail_nilai.id_siswa','=','profil_siswa.id')
                ->join('orang_tua', 'profil_siswa.id_orang_tua', '=', 'orang_tua.id')
                ->join('mata_pelajaran', 'mata_pelajaran.id', '=', 'detail_nilai.id_mapel')
                ->select('mata_pelajaran.nama', 'daftar_nilai.nilai_tugas', 
                'daftar_nilai.nilai_uts', 'daftar_nilai.nilai_uas', 'daftar_nilai.kelas', 'daftar_nilai.semester')
                ->where('profil_siswa.id','=',$request->id)
                ->orderBy('mata_pelajaran.nama')
                ->orderBy('daftar_nilai.nilai_tugas')
                ->orderBy('daftar_nilai.nilai_uts')
                ->orderBy('daftar_nilai.nilai_uas')
                ->orderBy('daftar_nilai.kelas','desc')
                ->orderBy('daftar_nilai.semester','desc')
                ->get();
       $siswa = ProfilSiswa::where('id',$request->id)->first(); 
        return view('guru.daftarNilai_nilai', compact('nilai','siswa','username'));
    }
    
    // kehadiran siswa##
    public function daftarKelas_absensi()
    {
        $username = Auth::user()->name;
        $kelas = Kelas::All();
        $username = Auth::user()->name;

        return view('guru.daftarKelas_absensi', compact('kelas','username'));
    }

    public function daftarSiswa_absensi(Request $request)
    {
        $username = Auth::user()->name;
       
        $siswa = ProfilSiswa::where('id_kelas',$request->id)->get(); 
        $username = Auth::user()->name;

        return view('guru.daftarSiswa_absensi', compact('siswa','username'));
    }

    public function daftarKehadiran_absensi(Request $request){

        $username = Auth::user()->name;

        $absen = DB::table('absensi')
                ->join('detail_absensi', 'detail_absensi.id_absensi','=','absensi.id')
                ->join('profil_siswa', 'detail_absensi.id_siswa','=','profil_siswa.id')
                ->select('absensi.bulan', 
                'absensi.kehadiran', 'absensi.alpa', 'absensi.sakit', 'absensi.izin')
                ->where('profil_siswa.id','=',$request->id)
                ->orderBy('absensi.bulan')
                ->orderBy('absensi.kehadiran')
                ->orderBy('absensi.alpa')
                ->orderBy('absensi.sakit')
                ->orderBy('absensi.izin')
                ->get();
       $siswa = ProfilSiswa::where('id',$request->id)->first(); 
       return view('guru.daftarKehadiran_absensi', compact('siswa','absen','username'));
    }

    public function saranDanMasukan()
    {
        $username = Auth::user()->name;
        return view('guru.saranDanMasukan', compact('username'));
    }

    public function sendSaranDanMasukan(Request $request){
        $id = Auth::user()->id;

        SaranDanMasukan::create([
                'id_user' => $id,
                'judul' => $request->judul,
                'isi' => $request->isi
		]);

        return redirect('guru/saranDanMasukan')->with('kirim', 'Saran dan Masukan Berhasil Dikrim');
    }
    
    
    // fitur bantuan
    public function pusatUnduhan()
    {
        $username = Auth::user()->name;
    	$unduhan = PusatUnduhan::all();
        $username = Auth::user()->name;

        return view('guru.pusatUnduhan',compact('unduhan','username'));
    }
    
    // jadwal
    public function kalenderAkademik()
    {
        $username = Auth::user()->name;
        $jadwal = DB::table('kalender_akademik')
            ->select('nama_kegiatan','jadwal_kegiatan','periode')
            ->where('periode','=','2021 - 2022')
            ->orderBy('nama_kegiatan')
            ->orderBy('jadwal_kegiatan')
            ->orderBy('periode')
            ->get();
        return view('guru.kalenderAkademik',compact('jadwal','username'));
    }

    public function filterKalender($id){

        //##

        if($id!=''){
            $jadwal = DB::table('kalender_akademik')
                ->select('nama_kegiatan','jadwal_kegiatan','periode')
                ->where('periode','=',"$id")
                ->orderBy('nama_kegiatan')
                ->orderBy('jadwal_kegiatan')
                ->orderBy('periode')
                ->get();
        }else{
            $jadwal = DB::table('kalender_akademik')
            ->select('nama_kegiatan','jadwal_kegiatan','periode')
            ->where('periode','=','2021 - 2022')
            ->orderBy('nama_kegiatan')
            ->orderBy('jadwal_kegiatan')
            ->orderBy('periode')
            ->get();
        }

        return $jadwal;
    }

    //##
    public function jadwalMengajar()
    {
        //get email orang tua berdasar login
        $email_login = Auth::user()->email;
        $username = Auth::user()->name;

        $today = Carbon::now()->isoFormat('dddd');

        if ($today == 'Sabtu'){
            $jadwal_mengajar = DB::table('jadwal_mengajar')
            ->join('detail_jadwal_mengajar','jadwal_mengajar.id','=','detail_jadwal_mengajar.id_jadwal')
            ->join('guru','guru.id','=','detail_jadwal_mengajar.id_guru')
            ->join('mata_pelajaran','mata_pelajaran.id','=','detail_jadwal_mengajar.id_mapel')
            ->join('kelas','kelas.id','=','detail_jadwal_mengajar.id_kelas')
            ->select('jadwal_mengajar.hari','jadwal_mengajar.jam_pelajaran','mata_pelajaran.nama',
            'kelas.nama_kelas')
            ->where('guru.email','=',$email_login)
            ->where('jadwal_mengajar.hari','LIKE','Jumat')
            ->orderBy('jadwal_mengajar.hari')
            ->orderBy('jadwal_mengajar.jam_pelajaran')
            ->orderBy('mata_pelajaran.nama')
            ->orderBy('kelas.nama_kelas')
            ->get();
        } else if ($today == 'Minggu'){
            $jadwal_mengajar = DB::table('jadwal_mengajar')
            ->join('detail_jadwal_mengajar','jadwal_mengajar.id','=','detail_jadwal_mengajar.id_jadwal')
            ->join('guru','guru.id','=','detail_jadwal_mengajar.id_guru')
            ->join('mata_pelajaran','mata_pelajaran.id','=','detail_jadwal_mengajar.id_mapel')
            ->join('kelas','kelas.id','=','detail_jadwal_mengajar.id_kelas')
            ->select('jadwal_mengajar.hari','jadwal_mengajar.jam_pelajaran','mata_pelajaran.nama',
            'kelas.nama_kelas')
            ->where('guru.email','=',$email_login)
            ->where('jadwal_mengajar.hari','LIKE','Jumat')
            ->orderBy('jadwal_mengajar.hari')
            ->orderBy('jadwal_mengajar.jam_pelajaran')
            ->orderBy('mata_pelajaran.nama')
            ->orderBy('kelas.nama_kelas')
            ->get();
        } else{
            $jadwal_mengajar = DB::table('jadwal_mengajar')
            ->join('detail_jadwal_mengajar','jadwal_mengajar.id','=','detail_jadwal_mengajar.id_jadwal')
            ->join('guru','guru.id','=','detail_jadwal_mengajar.id_guru')
            ->join('mata_pelajaran','mata_pelajaran.id','=','detail_jadwal_mengajar.id_mapel')
            ->join('kelas','kelas.id','=','detail_jadwal_mengajar.id_kelas')
            ->select('jadwal_mengajar.hari','jadwal_mengajar.jam_pelajaran','mata_pelajaran.nama',
            'kelas.nama_kelas')
            ->where('guru.email','=',$email_login)
            ->where('jadwal_mengajar.hari','LIKE',$today)
            ->orderBy('jadwal_mengajar.hari')
            ->orderBy('jadwal_mengajar.jam_pelajaran')
            ->orderBy('mata_pelajaran.nama')
            ->orderBy('kelas.nama_kelas')
            ->get();
        }

        return view('guru.jadwalGuru', compact('jadwal_mengajar','username'));
    }
    
    public function filterJadwal($id){
        //get email orang tua berdasar login
        $email_login = Auth::user()->email;
        $today = Carbon::now()->isoFormat('dddd');

        if($id!=''){
            $jadwal_mengajar = DB::table('jadwal_mengajar')
            ->join('detail_jadwal_mengajar','jadwal_mengajar.id','=','detail_jadwal_mengajar.id_jadwal')
            ->join('guru','guru.id','=','detail_jadwal_mengajar.id_guru')
            ->join('mata_pelajaran','mata_pelajaran.id','=','detail_jadwal_mengajar.id_mapel')
            ->join('kelas','kelas.id','=','detail_jadwal_mengajar.id_kelas')
            ->select('jadwal_mengajar.hari','jadwal_mengajar.jam_pelajaran','mata_pelajaran.nama',
            'kelas.nama_kelas')
            ->where('guru.email','=',$email_login)
            ->where('jadwal_mengajar.hari','LIKE',$id)
            ->orderBy('jadwal_mengajar.hari')
            ->orderBy('jadwal_mengajar.jam_pelajaran')
            ->orderBy('mata_pelajaran.nama')
            ->orderBy('kelas.nama_kelas')
            ->get();
        }else{
        if ($today == 'Sabtu'){
            $jadwal_mengajar = DB::table('jadwal_mengajar')
            ->join('detail_jadwal_mengajar','jadwal_mengajar.id','=','detail_jadwal_mengajar.id_jadwal')
            ->join('guru','guru.id','=','detail_jadwal_mengajar.id_guru')
            ->join('mata_pelajaran','mata_pelajaran.id','=','detail_jadwal_mengajar.id_mapel')
            ->join('kelas','kelas.id','=','detail_jadwal_mengajar.id_kelas')
            ->select('jadwal_mengajar.hari','jadwal_mengajar.jam_pelajaran','mata_pelajaran.nama',
            'kelas.nama_kelas')
            ->where('guru.email','=',$email_login)
            ->where('jadwal_mengajar.hari','LIKE','Jumat')
            ->orderBy('jadwal_mengajar.hari')
            ->orderBy('jadwal_mengajar.jam_pelajaran')
            ->orderBy('mata_pelajaran.nama')
            ->orderBy('kelas.nama_kelas')
            ->get();
        } else if ($today == 'Minggu'){
            $jadwal_mengajar = DB::table('jadwal_mengajar')
            ->join('detail_jadwal_mengajar','jadwal_mengajar.id','=','detail_jadwal_mengajar.id_jadwal')
            ->join('guru','guru.id','=','detail_jadwal_mengajar.id_guru')
            ->join('mata_pelajaran','mata_pelajaran.id','=','detail_jadwal_mengajar.id_mapel')
            ->join('kelas','kelas.id','=','detail_jadwal_mengajar.id_kelas')
            ->select('jadwal_mengajar.hari','jadwal_mengajar.jam_pelajaran','mata_pelajaran.nama',
            'kelas.nama_kelas')
            ->where('guru.email','=',$email_login)
            ->where('jadwal_mengajar.hari','LIKE','Jumat')
            ->orderBy('jadwal_mengajar.hari')
            ->orderBy('jadwal_mengajar.jam_pelajaran')
            ->orderBy('mata_pelajaran.nama')
            ->orderBy('kelas.nama_kelas')
            ->get();
        } else{
            $jadwal_mengajar = DB::table('jadwal_mengajar')
            ->join('detail_jadwal_mengajar','jadwal_mengajar.id','=','detail_jadwal_mengajar.id_jadwal')
            ->join('guru','guru.id','=','detail_jadwal_mengajar.id_guru')
            ->join('mata_pelajaran','mata_pelajaran.id','=','detail_jadwal_mengajar.id_mapel')
            ->join('kelas','kelas.id','=','detail_jadwal_mengajar.id_kelas')
            ->select('jadwal_mengajar.hari','jadwal_mengajar.jam_pelajaran','mata_pelajaran.nama',
            'kelas.nama_kelas')
            ->where('guru.email','=',$email_login)
            ->where('jadwal_mengajar.hari','LIKE',$today)
            ->orderBy('jadwal_mengajar.hari')
            ->orderBy('jadwal_mengajar.jam_pelajaran')
            ->orderBy('mata_pelajaran.nama')
            ->orderBy('kelas.nama_kelas')
            ->get();
        }
    }
        return $jadwal_mengajar;
    }

    // informasi
    public function berita()
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
}
