<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrangTua;
use App\Models\Guru;
use App\Models\ProfilSiswa;
use App\Models\Finansial;
use App\Models\PusatUnduhan;
use App\Models\Berita;
use App\Models\Foto;

use App\Imports\OrangTuaImport;
use App\Imports\GuruImport;
use App\Imports\FinansialImport;
use App\Imports\KelasImport;
use App\Imports\MataPelajaranImport;
use App\Imports\NilaiImport;
use App\Imports\SiswaImport;
use App\Imports\UsersImport;

use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller {
    
    public function homepage()
    {
        return view('admin.homepage');
    }

    // jadwallll Kelas
    public function jadwalKelasSiswa()
    {
        return view('admin.jadwalKelas');
    }

    public function formKelasSiswa()
    {
        return view('admin.form.menambahkanData.formKelasSiswa');
    }
    
    public function formUpdateKelasSiswa()
    {
        return view('admin.form.memperbaruiData.formMemperbaruiJadwalKelas');
    }
    
    // jadwal non akademik
    public function jadwalNonAkademikSiswa()
    {
        return view('admin.jadwalNonAkademikSiswa');
    }
    
    public function formNonAkademikSiswa()
    {
        return view('admin.form.menambahkanData.formNonAkademikSiswa');
    }
    
    public function formUpdateJadwalNonAkademik()
    {
        return view('admin.form.memperbaruiData.formMemperbaruiJadwalNonAkademik');
    }
    
    // finansiall
    public function finansialSiswa()
    {
        $finansial = Finansial::all();
        return view('admin.finansialSiswa', ['finansial' => $finansial]);
    }
    
    public function formFinansial()
    {
        return view('admin.form.menambahkanData.formFinansial');
    }
    
    public function formUpdateFinansial()
    {
        return view('admin.form.memperbaruiData.formMemperbaruiFinansial');
    }
    
    // beritaAdmin
    public function beritaAdmin()
    {
    	$berita = Berita::All();
        return view('admin.berita',compact('berita'));
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
			'judul' => $request->judul,
			'isi' => $request->isi,
			'foto' => $nama_file,
		]);
 
		return redirect('admin/beritaAdmin');
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
        return redirect('admin/beritaAdmin');
    }
    public function hapusberita($id)
    {
        $berita = Berita::find($id);
        $berita-> delete();
        return redirect('admin/beritaAdmin');
    }
    public function lihatberita(Request $request)
    {
       
        $berita = Berita::where('id',$request->id)->first(); 
        return view('admin.lihatberita', compact('berita'));
    }

    
    // data siswaaaaa
    public function data()
    {
        $siswa = ProfilSiswa::all();
        return view('admin.data', ['siswa' => $siswa]);
    }
    
    public function formData(Request $request)
    {
        return redirect('formData')->with('success', "Data berhasil disimpan");
    }
    
    public function formUpdateData()
    {
        return view('admin.form.memperbaruiData.formMemperbaruiDataSiswa');
    }
    
    // data guruuuuuuuuuuuuu
    public function dataGuru()
    {
        $guru = Guru::all();
        return view('admin.guru.dataGuru', ['guru' => $guru]);
    }
    
    public function formDataGuru(Request $request)
    {
        $guru = new OrangTua;
        $guru->nama = $request->nama;
        $guru->ttl = $request->ttl;
        $guru->alamat = $request->alamat;
        $guru->email = $request->email;
        $guru->save();
    
        return redirect('admin.dataGuru')->with('success', "Data berhasil disimpan");
    }
    
    public function formUpdateDataGuru()
    {
        return view('admin.form.memperbaruiData.formMemperbaruiDataGuru');
    }
    
    // data orang tua
    public function dataOrangtua()
    {
        $ortu = OrangTua::all();
        return view('admin.ortu.dataOrangTua', ['ortu' => $ortu]);
    }
    
    public function formDataOrangtua(Request $request)
    {
        $ortu = new OrangTua;
        $ortu->nama = $request->nama;
        $ortu->ttl = $request->ttl;
        $ortu->alamat = $request->alamat;
        $ortu->email = $request->email;
        $ortu->save();
    
        return redirect('admin.dataGuru')->with('success', "Data berhasil disimpan");
    }
    
    public function formUpdateDataOrangtua()
    {
        return view('admin.form.memperbaruiData.formMemperbaruiDataOrangtua');
    }



    // fitur bantuannnnn
    public function dokumenFiturBantuan()
    {
        $unduhan = PusatUnduhan::all();
        return view('admin.fiturBantuan',compact('unduhan'));
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
			'nama' => $nama_file,
			'ukuran' => $ukuran,
		]);

		return redirect('admin/dokumenFiturBantuan');
    }
    
   
    public function hapusunduhan($id)
    {
        $unduhan = PusatUnduhan::find($id);
        $unduhan-> delete();
        return redirect('admin/dokumenFiturBantuan');
    }
    
    
    // fitur tentang sekolah
    public function tentangSekolahAdmin()
    {
        return view('admin.tentang');
    }

    // fitur saranDanMasukanAdmin

    public function saranDanMasukanAdmin()
    {
        return view('admin.saranDanMasukanAdmin');
    }

    public function saranDanMasukanAdminDetail()
    {
        return view('admin.saranDanMasukanAdminDetail');
    }
    
    // fitur pesan
    
    public function pesanAdmin()
    {
        return view('admin.pesan');
        
    }

    // import data
    public function importData()
    {
        return view('admin.import');
    }

    public function importOrangTua()
    {
        Excel::import(new OrangTuaImport,request()->file('file'));
        return view('admin.import');  
    }

    public function importGuru()
    {
        Excel::import(new GuruImport,request()->file('file'));
        return view('admin.import');  
    }

    public function importUsers()
    {
        Excel::import(new UsersImport,request()->file('file'));
        return view('admin.import');  
    }

    public function importNilai()
    {
        Excel::import(new NilaiImport,request()->file('file'));
        return view('admin.import');  
    }

    public function importKelas()
    {
        Excel::import(new KelasImport,request()->file('file'));
        return view('admin.import');  
    }

    public function importMataPelajaran()
    {
        Excel::import(new MataPelajaranImport,request()->file('file'));
        return view('admin.import');  
    }

    public function importFinansial()
    {
        Excel::import(new FinansialImport,request()->file('file'));
        return view('admin.import');  
    }

    public function importSiswa()
    {
        Excel::import(new SiswaImport,request()->file('file'));
        return view('admin.import');  
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
			'nama' => $nama_file,
			'ukuran' => $ukuran,
		]);

		return redirect()->route('admin.gantiFoto');
    }

    public function hapusfoto($id)
    {
        $foto = Foto::find($id);
        $foto->delete();
        return redirect()->route('admin.gantiFoto');
    }
}
