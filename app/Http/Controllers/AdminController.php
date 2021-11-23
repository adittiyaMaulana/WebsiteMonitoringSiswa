<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
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
        return view('admin.finansialSiswa');
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
        return view('admin.data');
    }
    
    public function formData()
    {
        return view('admin.form.menambahkanData.formDataSiswa');
    }
    
    public function formUpdateData()
    {
        return view('admin.form.memperbaruiData.formMemperbaruiDataSiswa');
    }
    
    // fitur bantuannnnn
    public function dokumenFiturBantuan()
    {
        return view('admin.fiturBantuan');
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

    
}
