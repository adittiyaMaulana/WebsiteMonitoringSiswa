<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrangTuaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
//ini fungsi logout, fungsi nya sudah ada di LoginController
Route::get('logout',[LoginController::class,'logout']);

Route::get('/lupapassword', [LoginController::class,'lupapassword'])->name('lupapassword');
Route::post('/lupapasswordsubmit', [LoginController::class,'lupapasswordsubmit'])->name('lupapasswordsubmit');

//ini middleware utk tidak bisa kembali stelah login, filenya di folder App bagian middleware/preventbackhistory.php dan kernel.php
Route::group(['middleware' => 'preventBackHistory'], function(){
///////////////////////////////////////ADMIN////////////////////////////////////////////////////
    Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth']], function(){
        Route::get('/homepage_admin',[AdminController::class,'homepage'])->name('admin.homepage_admin');

        // IMPORT DATA //
        Route::get('/importData', [AdminController::class, 'importData'])->name('admin.importData');
        Route::get('/hapusData', [AdminController::class, 'hapusData'])->name('admin.hapusData');
        Route::get('/hapusDataAct', [AdminController::class, 'hapusDataAct'])->name('admin.hapusDataAct');

        Route::post('importOrangTua', [AdminController::class, 'importOrangTua'])->name('importOrangTua');
        Route::post('importGuru', [AdminController::class, 'importGuru'])->name('importGuru');
        Route::post('importUsers', [AdminController::class, 'importUsers'])->name('importUsers');
        Route::post('importNilai', [AdminController::class, 'importNilai'])->name('importNilai');
        Route::post('importKelas', [AdminController::class, 'importKelas'])->name('importKelas');
        Route::post('importMataPelajaran', [AdminController::class, 'importMataPelajaran'])->name('importMataPelajaran');
        Route::post('importFinansial', [AdminController::class, 'importFinansial'])->name('importFinansial');
        Route::post('importSiswa', [AdminController::class, 'importSiswa'])->name('importSiswa');
        Route::post('importKalenderAkademik', [AdminController::class, 'importKalenderAkademik'])->name('importKalenderAkademik');
        Route::post('importJadwalPelajaran', [AdminController::class, 'importJadwalPelajaran'])->name('importJadwalPelajaran');
        Route::post('importJadwalMengajar', [AdminController::class, 'importJadwalMengajar'])->name('importJadwalMengajar');
        Route::post('importAbsensi', [AdminController::class, 'importAbsensi'])->name('importAbsensi');
        Route::post('importAdmin', [AdminController::class, 'importAdmin'])->name('importAdmin');
        Route::post('importDetailAbsensi', [AdminController::class, 'importDetailAbsensi'])->name('importDetailAbsensi');
        Route::post('importDetailFinansial', [AdminController::class, 'importDetailFinansial'])->name('importDetailFinansial');
        Route::post('importDetailJadwalPelajaran', [AdminController::class, 'importDetailJadwalPelajaran'])->name('importDetailJadwalPelajaran');
        Route::post('importDetailJadwalMengajar', [AdminController::class, 'importDetailJadwalMengajar'])->name('importDetailJadwalMengajar');
        Route::post('importDetailNilai', [AdminController::class, 'importDetailNilai'])->name('importDetailNilai');
        // END OF IMPORT DATA SESSION //


        // berita √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
        Route::get('/berita', [AdminController::class, 'berita'])->name('admin.berita');
        Route::get('/tambahberita', [AdminController::class, 'tambahberita'])->name('admin.tambahberita');
        Route::post('/saveberita', [AdminController::class, 'saveberita'])->name('admin.saveberita');
        Route::get('/lihatberita/{id}', [AdminController::class, 'lihatberita'])->name('admin.lihatberita');
        Route::get('/editberita/{id}', [AdminController::class, 'editberita'])->name('admin.editberita');
        Route::post('/updateberita/{id}', [AdminController::class, 'updateberita'])->name('admin.updateberita');
        Route::get('/hapusberita/{id}', [AdminController::class, 'hapusberita'])->name('admin.hapusberita');
        

        // fitur bantuan √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
        Route::get('/pusatUnduhan', [AdminController::class, 'pusatUnduhan'])->name('admin.pusatUnduhan');
        Route::get('/tambahunduhan', [AdminController::class, 'tambahunduhan'])->name('admin.tambahunduhan');
        Route::post('/saveunduhan', [AdminController::class, 'saveunduhan'])->name('admin.saveunduhan');
        Route::get('/hapusunduhan/{id}', [AdminController::class, 'hapusunduhan'])->name('admin.hapusunduhan');

        

        //saranDanMasukanAdmin √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
        Route::get('/saranDanMasukan', [AdminController::class, 'saranDanMasukan'])->name('admin.saranDanMasukan');
        Route::get('/saranDanMasukanDetail/{id}', [AdminController::class, 'saranDanMasukanDetail'])->name('admin.saranDanMasukanDetail');
        Route::get('/hapusSaranDanMasukan/{id}', [AdminController::class, 'hapusSaranDanMasukan'])->name('admin.hapusSaranDanMasukan');

        //GANTI FOTOOOOOOOOOOOOOOOOOOOOOO
        Route::get('/gantifoto', [AdminController::class, 'gantiFoto'])->name('admin.gantiFoto');
        Route::post('/savefoto', [AdminController::class, 'savefoto'])->name('admin.savefoto');
        Route::get('/hapusfoto/{id}', [AdminController::class, 'hapusfoto'])->name('admin.hapusfoto');
    });

    ///////////////////////////////////////ORANG TUA////////////////////////////////////////////////////
    Route::group(['prefix'=>'orangTua', 'middleware'=>['isOrangTuaMiddleware','auth']], function(){
        Route::get('/homepage_ortu',[OrangTuaController::class,'homepage'])->name('orangTua.homepage_ortu');


        // jadwal kelas √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
        Route::get('/jadwalPelajaran', [OrangTuaController::class, 'jadwalPelajaran']);
        Route::get('/filterjadwal/{id}', [OrangTuaController::class, 'filterjadwal'])->name('orangTua.filterjadwal');

        // jadwal non dan aka √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
        Route::get('/kalenderAkademik', [OrangTuaController::class, 'kalenderAkademik']);
        Route::get('/filterKalender/{id}', [OrangTuaController::class, 'filterKalender'])->name('orangTua.filterKalender');

        // finansial √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
        Route::get('/finansial', [OrangTuaController::class, 'finansial']);
        Route::get('/filterfinansial/{id}', [OrangTuaController::class, 'filterfinansial'])->name('orangTua.filterfinansial');

        // berita √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
        Route::get('/berita', [OrangTuaController::class, 'berita']);
        Route::get('/lihatberita/{id}', [OrangTuaController::class, 'lihatberita'])->name('orangTua.lihatberita');

        // nilai √√√√√√√√√√√√√√√√√√√√√√√√√√√√√
        Route::get('/daftarNilai', [OrangTuaController::class, 'daftarNilai']);
        Route::get('/filternilai/{id}', [OrangTuaController::class, 'filternilai'])->name('orangTua.filternilai');

        // kehadiran √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
        Route::get('/absensi', [OrangTuaController::class, 'absensi']);
        Route::get('/filterAbsensi/{id}', [OrangTuaController::class, 'filterAbsensi'])->name('orangTua.filterAbsensi');

        // fitur bantuan √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
        Route::get('/pusatUnduhan', [OrangTuaController::class, 'pusatUnduhan']);
        

        Route::view('/pesan', 'livechatings.messages');

        // saranDanMasukan √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
        Route::get('/saranDanMasukan', [OrangTuaController::class, 'saranDanMasukan']);
        Route::post('/sendSaranDanMasukan', [OrangTuaController::class, 'sendSaranDanMasukan'])->name('orangTua.sendSaranDanMasukan');
    
    });

    ///////////////////////////////////////Guru////////////////////////////////////////////////////
    Route::group(['prefix'=>'guru', 'middleware'=>['isGuru','auth']], function(){
        Route::get('/homepage_guru',[GuruController::class,'homepage'])->name('guru.homepage_guru');
        // nilai siswa
        Route::get('/daftarKelas_nilai', [GuruController::class, 'daftarKelas_nilai']);
        Route::get('/daftarSiswa_nilai/{id}', [GuruController::class, 'daftarSiswa_nilai'])->name('guru.daftarSiswa_nilai');
        Route::get('/daftarNilai_nilai/{id}', [GuruController::class, 'daftarNilai_nilai'])->name('guru.daftarNilai_nilai');

        // kehadiran siswa
        Route::get('/daftarKelas_absensi', [GuruController::class, 'daftarKelas_absensi']);
        Route::get('/daftarSiswa_absensi/{id}', [GuruController::class, 'daftarSiswa_absensi'])->name('guru.daftarSiswa_absensi');
        Route::get('/daftarKehadiran_absensi/{id}', [GuruController::class, 'daftarKehadiran_absensi'])->name('guru.daftarKehadiran_absensi');

        // saranDanMasukan
        Route::get('/saranDanMasukan', [GuruController::class, 'saranDanMasukan'])->name('guru.saranDanMasukan');
        Route::post('/sendSaranDanMasukan', [GuruController::class, 'sendSaranDanMasukan'])->name('guru.sendSaranDanMasukan');
        
        // PESAN
        // Route::get('/pesanGuru', [GuruController::class, 'pesanGuru']);
        Route::view('/pesanGuru', 'livechatings.messages-guru');
        
        // FITUR BANTUANNNN
        Route::get('/pusatUnduhan', [GuruController::class, 'pusatUnduhan']);
        
        // jadwalll
        Route::get('/kalenderAkademik', [GuruController::class, 'kalenderAkademik']);
        Route::get('/filterKalender/{id}', [GuruController::class, 'filterKalender'])->name('guru.filterKalender');
        Route::get('/jadwalMengajar', [GuruController::class, 'jadwalMengajar']);
        Route::get('/filterJadwal/{id}', [GuruController::class, 'filterJadwal'])->name('guru.filterJadwal');
        
        // beritaa
        Route::get('/berita', [GuruController::class, 'berita']);
        Route::get('/lihatberita/{id}', [GuruController::class, 'lihatberita'])->name('guru.lihatberita');

    });

});


