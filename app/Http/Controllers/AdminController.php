<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrangTua;
use App\Models\Guru;
use App\Models\ProfilSiswa;
use App\Models\Finansial;
use App\Models\PusatUnduhan;

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
        return view('admin.berita');
    }

    public function formBerita()
    {
        return view('admin.form.menambahkanData.formBerita');
    }
    
    public function formUpdateBerita()
    {
        return view('admin.form.memperbaruiData.formMemperbaruiBerita');
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
        return view('admin.fiturBantuan', ['unduhan'=>$unduhan]);
    }
    
    public function formFiturBantuan()
    {
        return view('admin.form.menambahkanData.formFiturBantuan');
    }
    
    public function formUpdateFiturBantuan()
    {
        return view('admin.form.memperbaruiData.formMemperbaruiFiturBantuan');
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

    public function saranDanMasukanDetail()
    {
        return view('admin.saranDanMasukanDetail');
    }
    
    // fitur pesan
    
    public function pesanAdmin()
    {
        return view('admin.pesan');
        
    }


    

    ////////////////////FOR ORANG TUA////////////////////////////////////////

    public function view_ortu(){
        
    }

    //ADD DATA ORANG TUA BY ADMIN
    public function insert_ortu() {
        $ortu = new OrangTua;
        return view('admin.ortu.insert', compact(
            'ortu'
        ));
    }
    
    public function store_ortu(Request $request) {
        $ortu = new OrangTua;
        $ortu->nama = $request->nama;
        $ortu->ttl = $request->ttl;
        $ortu->alamat = $request->alamat;
        $ortu->email = $request->email;
        $ortu->save();
    
        return redirect('homepageAdmin')->with('success', "Data berhasil disimpan");
    }
    

    //UPDATE DATA ORTU
    public function edit_ortu($id)
    {
        $ortu = OrangTua::find($id);
        return view('admin.ortu.edit', compact(
            'ortu'
        ));
    }

    public function update_ortu(Request $request, $id)
    {
        $ortu = OrangTua::find($id);
        $ortu->nama = $request->nama;
        $ortu->ttl = $request->ttl;
        $ortu->alamat = $request->alamat;
        $ortu->email = $request->email;
        $ortu->save();

        return redirect('homepageAdmin')->with('success', "Data berhasil diperbaharui");
    }

    //DELETE DATA ORTU
    public function delete_ortu($id){
        $ortu = OrangTua::find($id);
        $ortu->delete();
        return redirect('homepageAdmin');
    }


    ////////////////////FOR GURU////////////////////////////////////////

    public function view_guru(){
        
    }

    //ADD DATA ORANG TUA BY ADMIN
    public function insert_guru() {
        $guru = new Guru;
        return view('admin.guru.insert', compact(
            'guru'
        ));
    }
    
    public function store_guru(Request $request) {
        $guru = new Guru;
        $guru->nama = $request->nama;
        $guru->ttl = $request->ttl;
        $guru->alamat = $request->alamat;
        $guru->email = $request->email;
        $guru->save();
    
        return redirect('homepageAdmin')->with('success', "Data berhasil disimpan");
    }
    
    //UPDATE DATA guru
    public function edit_guru($id)
    {
        $guru = Guru::find($id);
        return view('admin.guru.edit', compact(
            'guru'
        ));
    }

    public function update_guru(Request $request, $id)
    {
        $guru = Guru::find($id);
        $guru->nama = $request->nama;
        $guru->ttl = $request->ttl;
        $guru->alamat = $request->alamat;
        $guru->email = $request->email;
        $guru->save();

        return redirect('homepageAdmin')->with('success', "Data berhasil diperbaharui");
    }

    //DELETE DATA guru
    public function delete_guru($id){
        $guru = Guru::find($id);
        $guru->delete();
        return redirect('homepageAdmin');
    }
}
