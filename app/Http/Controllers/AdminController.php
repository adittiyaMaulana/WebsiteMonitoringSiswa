<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Imports\AbsensiImport;
use App\Imports\DetailAbsensiImport;
use App\Imports\DetailFinansialImport;
use App\Imports\DetailJadwalMengajarImport;
use App\Imports\DetailJadwalPelajaranImport;
use App\Imports\DetailNilaiImport;
use Illuminate\Http\Request;
use App\Models\OrangTua;
use App\Models\Guru;
use App\Models\ProfilSiswa;
use App\Models\Finansial;
use App\Models\PusatUnduhan;
use App\Models\Berita;
use App\Models\Foto;

use App\Imports\OrangTuaImport;
use App\Imports\AdminImport;
use App\Imports\GuruImport;
use App\Imports\FinansialImport;
use App\Imports\JadwalMengajarImport;
use App\Imports\JadwalPelajaranImport;
use App\Imports\KelasImport;
use App\Imports\MataPelajaranImport;
use App\Imports\NilaiImport;
use App\Imports\SiswaImport;
use App\Imports\UsersImport;
use App\Imports\KalenderAkademikImport;
use App\Models\DetailJadwalMengajar;
use App\Models\SaranDanMasukan;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {
    
    public function homepage()
    {
        return view('admin.homepage_admin');
    }
    
    // beritaAdmin
    public function berita()
    {
    	$berita = Berita::All();
        return view('admin.berita',compact('berita'));
    }
    
    public function hapusDataAct()
    {
    	DB::statement("SET foreign_key_checks=0");
		DB::table('absensi')->truncate();
		DB::table('berita')->truncate();
		DB::table('daftar_nilai')->truncate();
		DB::table('finansial')->truncate();
		// DB::table('foto')->truncate();
		//DB::table('guru')->truncate();
		DB::table('kalender_akademik')->truncate();
		DB::table('jadwal_mengajar')->truncate();
		DB::table('jadwal_pelajaran')->truncate();
		DB::table('kelas')->truncate();
		DB::table('mata_pelajaran')->truncate();
		DB::table('messages')->truncate();
		//DB::table('orang_tua')->truncate();
		DB::table('profil_siswa')->truncate();
		DB::table('pusat_unduhan')->truncate();
		DB::table('saran_dan_masukan')->truncate();
		DB::table('detail_finansial')->truncate();
		DB::table('detail_jadwal_pelajaran')->truncate();
		DB::table('detail_jadwal_mengajar')->truncate();
		DB::table('detail_saran_dan_masukan')->truncate();
		DB::table('detail_nilai')->truncate();
		DB::table('detail_absensi')->truncate();
		//DB::delete('delete from users where role != 1');
		DB::statement("SET foreign_key_checks=1");
        return view('admin.hapusData');
    }

    public function tambahberita()
    {
        return view('admin.tambahberita');
    }
    
    public function saveberita(Request $request)
    {
    		$this->validate($request, [
			'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			]);
		$file = $request->file('foto');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'foto';
		$file->move($tujuan_upload,$nama_file);
 
		Berita::create([
			'id_kreator' => Auth::user()->id,
			'judul' => $request->judul,
			'isi' => $request->isi,
			'foto' => $nama_file,
		]);
 
		return redirect('admin/berita')->with('simpan', 'Data Berhasil Disimpan');
    }
    
    public function editberita(Request $request)
    {
       
        $berita = Berita::where('id',$request->id)->first(); 
        return view('admin.editberita', compact('berita'));
    }
     public function updateberita(Request $request, $id)
    {
        $berita = Berita::find($id);
        $berita->judul = $request->input('judul');
        $berita->isi = $request->input('isi');
        
        if($request->hasFile('foto')){ 
        $file = $request->file('foto');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'foto';
		$file->move($tujuan_upload,$nama_file);
        	$berita->foto = $nama_file;
        }else{
			$berita->foto = $request->input('foto2');
		}
        
        $berita->update();
        return redirect('admin/berita')->with('ubah', 'Data Berhasil Diperbarui');
    }
    public function hapusberita($id)
    {
        $berita = Berita::find($id);
        $berita-> delete();
        return redirect('admin/berita')->with('hapus', 'Data Berhasil Dihapus');
    }
    public function lihatberita(Request $request)
    {
        $berita = Berita::where('id',$request->id)->first(); 
        return view('admin.lihatberita', compact('berita'));
    }

    // fitur bantuannnnn
    public function pusatUnduhan()
    {
        $unduhan = PusatUnduhan::all();
        return view('admin.pusatUnduhan',compact('unduhan'));
    }
    
    public function tambahunduhan()
    {
        return view('admin.tambahunduhan');
    }
    
    public function saveunduhan(Request $request)
    {
    		$this->validate($request, [
			'file' => 'required|file|mimes:pdf|max:2048',
			]);
		$file = $request->file('file');
		$nama_file = $file->getClientOriginalName();
		$ukuran = $file->getSize();
		$tujuan_upload = 'unduhan';
		$file->move($tujuan_upload,$nama_file);
 
		PusatUnduhan::create([
			'id_kreator' => Auth::user()->id,
			'nama' => $nama_file,
			'ukuran' => $ukuran,
		]);

		return redirect('admin/pusatUnduhan')->with('simpan', 'Data Berhasil Disimpan');
    }
    
   
    public function hapusunduhan($id)
    {
        $unduhan = PusatUnduhan::find($id);
        $unduhan->delete();
        return redirect('admin/pusatUnduhan')->with('hapus', 'Data Berhasil Dihapus');
    }
    
    // fitur saranDanMasukanAdmin

    public function saranDanMasukan()
    {
        $saranmasukan = SaranDanMasukan::all();
        return view('admin.saranDanMasukan',compact('saranmasukan'));
    }

    public function saranDanMasukanDetail($id)
    {
        $data = DB::table('saran_dan_masukan')
        ->join('users','saran_dan_masukan.id_user','=','users.id')
        ->select('users.email','users.role','users.name','saran_dan_masukan.judul','saran_dan_masukan.isi')
        ->where('saran_dan_masukan.id','=',$id)
        ->get();
        return view('admin.saranDanMasukanDetail',compact('data'));
    }

    public function hapusSaranDanMasukan($id){
        $data = SaranDanMasukan::find($id);
        $data->delete();
        return redirect('admin/saranDanMasukan')->with('hapus', 'Data Berhasil Dihapus');
    }
    

    // import data
    public function importData()
    {
        return view('admin.import');
    }
    
     // import data
    public function hapusData()
    {
        return view('admin.hapusData');
    }

	public function importAdmin(Request $request)
    {
        // validasi
		$this->validate($request, [
			'file' => 'required|mimes:xls,xlsx'
		]);
		
		$data = Excel::import(new AdminImport, request()->file('file'));      
		
		if($data){
			return redirect()->route('admin.importData')->withSuccess(['Berhasil Melakukan Import Data!']);
		}else{
			return redirect()->route('admin.importData');
		}
    }

    public function importOrangTua(Request $request)
    {
        // validasi
		$this->validate($request, [
			'file' => 'required|mimes:xls,xlsx'
		]);
		
		$data = Excel::import(new OrangTuaImport, request()->file('file'));      
		
		if($data){
			return redirect()->route('admin.importData')->withSuccess(['Berhasil Melakukan Import Data!']);
		}else{
			return redirect()->route('admin.importData');
		}
    }

    public function importGuru(Request $request)
    {
        // validasi
		$this->validate($request, [
			'file' => 'required|mimes:xls,xlsx'
		]);
		
		$data = Excel::import(new GuruImport, request()->file('file'));      
		
		if($data){
			return redirect()->route('admin.importData')->withSuccess(['Berhasil Melakukan Import Data!']);
		}else{
			return redirect()->route('admin.importData');
		}
    }

    public function importUsers(Request $request)
    {
        // validasi
		$this->validate($request, [
			'file' => 'required|mimes:xls,xlsx'
		]);
		
		$data = Excel::import(new UsersImport, request()->file('file'));      
		
		if($data){
			return redirect()->route('admin.importData')->withSuccess(['Berhasil Melakukan Import Data!']);
		}else{
			return redirect()->route('admin.importData');
		}
    }

    public function importNilai(Request $request)
    {
        // validasi
		$this->validate($request, [
			'file' => 'required|mimes:xls,xlsx'
		]);
		
		$data = Excel::import(new NilaiImport, request()->file('file'));      
		
		if($data){
			return redirect()->route('admin.importData')->withSuccess(['Berhasil Melakukan Import Data!']);
		}else{
			return redirect()->route('admin.importData');
		}
    }

    public function importKelas(Request $request)
    {
        // validasi
		$this->validate($request, [
			'file' => 'required|mimes:xls,xlsx'
		]);
		
		$data = Excel::import(new KelasImport, request()->file('file'));      
		
		if($data){
			return redirect()->route('admin.importData')->withSuccess(['Berhasil Melakukan Import Data!']);
		}else{
			return redirect()->route('admin.importData');
		}
    }

    public function importMataPelajaran(Request $request)
    {
         // validasi
		$this->validate($request, [
			'file' => 'required|mimes:xls,xlsx'
		]);
		
		$data = Excel::import(new MataPelajaranImport, request()->file('file'));      
		
		if($data){
			return redirect()->route('admin.importData')->withSuccess(['Berhasil Melakukan Import Data!']);
		}else{
			return redirect()->route('admin.importData');
		} 
    }

    public function importFinansial(Request $request)
    {
         // validasi
		$this->validate($request, [
			'file' => 'required|mimes:xls,xlsx'
		]);
		
		$data = Excel::import(new FinansialImport, request()->file('file'));      
		
		if($data){
			return redirect()->route('admin.importData')->withSuccess(['Berhasil Melakukan Import Data!']);
		}else{
			return redirect()->route('admin.importData');
		}  
    }

	public function importAbsensi(Request $request){
		 // validasi
		 $this->validate($request, [
			'file' => 'required|mimes:xls,xlsx'
		]);
		
		$data = Excel::import(new AbsensiImport, request()->file('file'));      
		
		if($data){
			return redirect()->route('admin.importData')->withSuccess(['Berhasil Melakukan Import Data!']);
		}else{
			return redirect()->route('admin.importData');
		}  
	}

    public function importSiswa(Request $request)
    {
    	// validasi
		$this->validate($request, [
			'file' => 'required|mimes:xls,xlsx'
		]);
		
		$data = Excel::import(new SiswaImport, request()->file('file'));      
		
		if($data){
			return redirect()->route('admin.importData')->withSuccess(['Berhasil Melakukan Import Data!']);
		}else{
			return redirect()->route('admin.importData');
		}
    }
    
    public function importKalenderAkademik(Request $request){
         // validasi
		$this->validate($request, [
			'file' => 'required|mimes:xls,xlsx'
		]);
		
		$data = Excel::import(new KalenderAkademikImport, request()->file('file'));      
		
		if($data){
			return redirect()->route('admin.importData')->withSuccess(['Berhasil Melakukan Import Data!']);
		}else{
			return redirect()->route('admin.importData');
		}
    }

	public function importJadwalPelajaran(Request $request){
		 // validasi
		 $this->validate($request, [
			'file' => 'required|mimes:xls,xlsx'
		]);
		
		$data = Excel::import(new JadwalPelajaranImport, request()->file('file'));      
		
		if($data){
			return redirect()->route('admin.importData')->withSuccess(['Berhasil Melakukan Import Data!']);
		}else{
			return redirect()->route('admin.importData');
		}  
    }

   	public function importJadwalMengajar(Request $request){
		 // validasi
		 $this->validate($request, [
			'file' => 'required|mimes:xls,xlsx'
		]);
		
		$data = Excel::import(new JadwalMengajarImport, request()->file('file'));      
		
		if($data){
			return redirect()->route('admin.importData')->withSuccess(['Berhasil Melakukan Import Data!']);
		}else{
			return redirect()->route('admin.importData');
		}  
	}

	public function importDetailJadwalPelajaran(Request $request){
		 // validasi
		 $this->validate($request, [
			'file' => 'required|mimes:xls,xlsx'
		]);
		
		$data = Excel::import(new DetailJadwalPelajaranImport, request()->file('file'));      
		
		if($data){
			return redirect()->route('admin.importData')->withSuccess(['Berhasil Melakukan Import Data!']);
		}else{
			return redirect()->route('admin.importData');
		}  
	}

	public function importDetailJadwalMengajar(Request $request){
		 // validasi
		 $this->validate($request, [
			'file' => 'required|mimes:xls,xlsx'
		]);
		
		$data = Excel::import(new DetailJadwalMengajarImport, request()->file('file'));      
		
		if($data){
			return redirect()->route('admin.importData')->withSuccess(['Berhasil Melakukan Import Data!']);
		}else{
			return redirect()->route('admin.importData');
		}  
	}

	public function importDetailFinansial(Request $request){
		 // validasi
		 $this->validate($request, [
			'file' => 'required|mimes:xls,xlsx'
		]);
		
		$data = Excel::import(new DetailFinansialImport, request()->file('file'));      
		
		if($data){
			return redirect()->route('admin.importData')->withSuccess(['Berhasil Melakukan Import Data!']);
		}else{
			return redirect()->route('admin.importData');
		}  
	}

	public function importDetailAbsensi(Request $request){
		 // validasi
		 $this->validate($request, [
			'file' => 'required|mimes:xls,xlsx'
		]);
		
		$data = Excel::import(new DetailAbsensiImport, request()->file('file'));      
		
		if($data){
			return redirect()->route('admin.importData')->withSuccess(['Berhasil Melakukan Import Data!']);
		}else{
			return redirect()->route('admin.importData');
		}  
	}

	public function importDetailNilai(Request $request){
		 // validasi
		 $this->validate($request, [
			'file' => 'required|mimes:xls,xlsx'
		]);
		
		$data = Excel::import(new DetailNilaiImport, request()->file('file'));      
		
		if($data){
			return redirect()->route('admin.importData')->withSuccess(['Berhasil Melakukan Import Data!']);
		}else{
			return redirect()->route('admin.importData');
		}  
	}

    public function gantiFoto()
    {
        $foto = Foto::all();
        return view('admin.gantiFoto',compact('foto'));  
    }

    public function savefoto(Request $request)
    {
    	$this->validate($request, [
			'file' => 'required|file|mimes:jpg,jpeg,png|max:2048',
		]);


		$file = $request->file('file');
		$nama_file = $file->getClientOriginalName();
		$ukuran = $file->getSize();
		$tujuan_upload = 'foto';
		$file->move($tujuan_upload,$nama_file);
        
        $foto = Foto::first();
        $foto->delete();

		Foto::create([
			'id_kreator' => Auth::user()->id,
			'nama' => $nama_file,
			'ukuran' => $ukuran,
		]);

		return redirect()->route('admin.gantiFoto')->with('ubah', 'Foto Login Berhasil Diperbarui');
    }

    public function hapusfoto($id)
    {
        $foto = Foto::find($id);
        $foto->delete();
        return redirect()->route('admin.gantiFoto');
    }
}
