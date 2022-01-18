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

//auth ini buat google
// Route::get('/auth/redirect', 'App\Http\Controllers\Auth\LoginController@redirectToProvider');
// Route::get('/auth/callback', 'App\Http\Controllers\Auth\LoginController@handleProviderCallback');

Route::get('/lupapassword', 'App\Http\Controllers\Auth\LoginController@lupapassword')->name('lupapassword');
Route::post('/lupapasswordsubmit', 'App\Http\Controllers\Auth\LoginController@lupapasswordsubmit')->name('lupapasswordsubmit');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


///////////////////////////////////////ADMIN////////////////////////////////////////////////////
Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth']], function(){
    Route::get('/homepageAdmin',[AdminController::class,'homepage'])->name('admin.homepage');

    // IMPORT DATA //
    Route::get('/importData', [AdminController::class, 'importData'])->name('admin.importData');

    Route::post('importOrangTua', [AdminController::class, 'importOrangTua'])->name('importOrangTua');
    Route::post('importGuru', [AdminController::class, 'importGuru'])->name('importGuru');
    Route::post('importUsers', [AdminController::class, 'importUsers'])->name('importUsers');
    Route::post('importNilai', [AdminController::class, 'importNilai'])->name('importNilai');
    Route::post('importKelas', [AdminController::class, 'importKelas'])->name('importKelas');
    Route::post('importMataPelajaran', [AdminController::class, 'importMataPelajaran'])->name('importMataPelajaran');
    Route::post('importFinansial', [AdminController::class, 'importFinansial'])->name('importFinansial');
    Route::post('importSiswa', [AdminController::class, 'importSiswa'])->name('importSiswa');
    Route::post('importJadwalAkademikNonAkademik', [AdminController::class, 'importJadwalAkademikNonAkademik'])->name('importJadwalAkademikNonAkademik');
    // END OF IMPORT DATA SESSION //


    // berita √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    Route::get('/beritaAdmin', [AdminController::class, 'beritaAdmin'])->name('admin.beritaAdmin');
    Route::get('/tambahberita', [AdminController::class, 'tambahberita'])->name('admin.tambahberita');
    Route::post('/saveberita', 'App\Http\Controllers\AdminController@saveberita')->name('admin.saveberita');
    Route::get('/lihatberita/{id}', 'App\Http\Controllers\AdminController@lihatberita')->name('admin.lihatberita');
    Route::get('/editberita/{id}', 'App\Http\Controllers\AdminController@editberita')->name('admin.editberita');
	Route::post('/updateberita/{id}', 'App\Http\Controllers\AdminController@updateberita')->name('admin.updateberita');
	Route::get('/hapusberita/{id}', 'App\Http\Controllers\AdminController@hapusberita')->name('admin.hapusberita');
    // Route::get('/formBerita', [AdminController::class, 'formBerita'])->name('admin.formBerita');
    Route::get('/formBerita', [AdminController::class, 'formBerita'])->name('admin.formBerita');
    Route::get('/formUpdateBerita', [AdminController::class, 'formUpdateBerita'])->name('admin.formUpdateBerita');

    // fitur bantuan √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    Route::get('/dokumenFiturBantuan', [AdminController::class, 'dokumenFiturBantuan'])->name('admin.dokumenFiturBantuan');
  	Route::get('/tambahunduhan', [AdminController::class, 'tambahunduhan'])->name('admin.tambahunduhan');
    Route::post('/saveunduhan', 'App\Http\Controllers\AdminController@saveunduhan')->name('admin.saveunduhan');
    Route::get('/hapusunduhan/{id}', 'App\Http\Controllers\AdminController@hapusunduhan')->name('admin.hapusunduhan');

    

    //saranDanMasukanAdmin √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    Route::get('/saranDanMasukanAdmin', [AdminController::class, 'saranDanMasukanAdmin'])->name('admin.saranDanMasukanAdmin');
    Route::get('/saranDanMasukanAdminDetail/{id}', [AdminController::class, 'saranDanMasukanAdminDetail'])->name('admin.saranDanMasukanAdminDetail');
    Route::get('/hapusSaranDanMasukanAdmin/{id}', [AdminController::class, 'hapusSaranDanMasukanAdmin'])->name('admin.hapusSaranDanMasukanAdmin');

    //GANTI FOTOOOOOOOOOOOOOOOOOOOOOO
    Route::get('/gantifoto', [AdminController::class, 'gantiFoto'])->name('admin.gantiFoto');
    Route::post('/savefoto', 'App\Http\Controllers\AdminController@savefoto')->name('admin.savefoto');
    Route::get('/hapusfoto/{id}', 'App\Http\Controllers\AdminController@hapusfoto')->name('admin.hapusfoto');
});

///////////////////////////////////////ORANG TUA////////////////////////////////////////////////////
Route::group(['prefix'=>'orangTua', 'middleware'=>['isOrangTuaMiddleware','auth']], function(){
    Route::get('/homepage',[OrangTuaController::class,'homepage'])->name('orangTua.homepage');


    // jadwal kelas √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    Route::get('/jadwalKelas', [OrangTuaController::class, 'jadwalKelas']);
    Route::get('/filterjadwal/{id}', [OrangTuaController::class, 'filterjadwal'])->name('orangTua.filterjadwal');

    // jadwal non dan aka √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    Route::get('/jadwalAkadanNonAkademik', [OrangTuaController::class, 'jadwalAkadanNonAkademik']);
    Route::get('/jadwalAkademik', [OrangTuaController::class, 'jadwalAkademik']);

    // finansial √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    Route::get('/finansial', [OrangTuaController::class, 'finansial']);
    Route::get('/filterfinansial/{id}', [OrangTuaController::class, 'filterfinansial'])->name('orangTua.filterfinansial');

    // berita √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    Route::get('/berita', [OrangTuaController::class, 'berita']);
    Route::get('/lihatberita/{id}', 'App\Http\Controllers\OrangTuaController@lihatberita')->name('orangTua.lihatberita');
    Route::get('/beritaDetail', [OrangTuaController::class, 'beritaDetail']);

    // nilai √√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    Route::get('/nilai', [OrangTuaController::class, 'nilai']);
    Route::get('/filternilai/{id}', [OrangTuaController::class, 'filternilai'])->name('orangTua.filternilai');

    // kehadiran √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    Route::get('/kehadiran', [OrangTuaController::class, 'kehadiran']);
    Route::get('/filterabsensi/{id}', [OrangTuaController::class, 'filterabsensi'])->name('orangTua.filterabsensi');

    // fitur bantuan √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    Route::get('/fiturBantuan', [OrangTuaController::class, 'fiturBantuan']);
    

    Route::view('/pesan', 'livechatings.messages');

    // saranDanMasukan √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    Route::get('/saranDanMasukan', [OrangTuaController::class, 'saranDanMasukan']);
    Route::post('/sendSaranMasukan', 'App\Http\Controllers\OrangTuaController@sendSaranMasukan')->name('orangTua.sendSaranMasukan');
  
});

///////////////////////////////////////Guru////////////////////////////////////////////////////
Route::group(['prefix'=>'guru', 'middleware'=>['isGuru','auth']], function(){
    Route::get('/homepageGuru',[GuruController::class,'homepageGuru'])->name('guru.homepage');
    // nilai siswa
    Route::get('/nilaiSiswa', [GuruController::class, 'nilaiSiswa']);
    Route::get('/listsiswa/{id}', 'App\Http\Controllers\GuruController@listsiswa')->name('guru.listsiswa');
    Route::get('/listnilai/{id}', 'App\Http\Controllers\GuruController@listnilai')->name('guru.listnilai');
    Route::get('/updateNilaiSiswa', [GuruController::class, 'updateNilaiSiswa']);

    // kehadiran siswa
    Route::get('/kehadiranSiswa', [GuruController::class, 'kehadiranSiswa']);
    Route::get('/listKehadiranSiswa/{id}', 'App\Http\Controllers\GuruController@listKehadiranSiswa')->name('guru.listKehadiranSiswa');
    Route::get('/listKehadiran/{id}', 'App\Http\Controllers\GuruController@listKehadiran')->name('guru.listKehadiran');
    Route::get('/updatekehadiranSiswa', [GuruController::class, 'updatekehadiranSiswa']);

    // saranDanMasukan
    Route::get('/saranDanMasukanGuru', [GuruController::class, 'saranDanMasukanGuru']);
    Route::post('/sendSaranMasukan', 'App\Http\Controllers\GuruController@sendSaranMasukan')->name('guru.sendSaranMasukan');
    
    // PESAN
    // Route::get('/pesanGuru', [GuruController::class, 'pesanGuru']);
    Route::view('/pesanGuru', 'livechatings.messages-guru');
    
    // FITUR BANTUANNNN
    Route::get('/pusatBantuanGuru', [GuruController::class, 'pusatBantuanGuru']);
    
    // jadwalll
    Route::get('/jadwalAkadaNonAkaGuru', [GuruController::class, 'jadwalAkadaNonAkaGuru']);
    Route::get('/filterJadwalAkaNonAka/{id}', [GuruController::class, 'filterJadwalAkaNonAka'])->name('guru.filterJadwalAkaNonAka');
    Route::get('/jadwalGuru', [GuruController::class, 'jadwalGuru']);
    Route::get('/filterJadwalGuru/{id}', [GuruController::class, 'filterJadwalGuru'])->name('guru.filterJadwalGuru');
    
    // beritaa
    Route::get('/beritaGuru', [GuruController::class, 'beritaGuru']);
    Route::get('/lihatberita/{id}', 'App\Http\Controllers\GuruController@lihatberita')->name('guru.lihatberita');
    Route::get('/beritaDetailGuru', [GuruController::class, 'beritaDetailGuru']);

});


