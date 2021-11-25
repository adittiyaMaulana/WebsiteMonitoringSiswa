<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrangTuaController;
use App\Http\Controllers\GuruController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


///////////////////////////////////////ADMIN////////////////////////////////////////////////////
Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth']], function(){
    Route::get('/homepageAdmin',[AdminController::class,'homepage'])->name('admin.homepage');

    // jadwal
    // jadwal kelas
    Route::get('/jadwalKelasSiswa', [AdminController::class, 'jadwalKelasSiswa'])->name('admin.jadwalKelasSiswa');
    Route::get('/formKelasSiswa', [AdminController::class, 'formKelasSiswa'])->name('admin.formKelasSiswa');
    Route::get('/formUpdateKelasSiswa', [AdminController::class, 'formUpdateKelasSiswa'])->name('admin.formUpdateKelasSiswa');

    // jadwal non
    Route::get('/jadwalNonAkademikSiswa', [AdminController::class, 'jadwalNonAkademikSiswa'])->name('admin.jadwalNonAkademikSiswa');
    Route::get('/formNonAkademikSiswa', [AdminController::class, 'formNonAkademikSiswa'])->name('admin.formNonAkademikSiswa');
    Route::get('/formUpdateJadwalNonAkademik', [AdminController::class, 'formUpdateJadwalNonAkademik'])->name('admin.formUpdateJadwalNonAkademik');

    // Finansial
    Route::get('/finansialSiswa', [AdminController::class, 'finansialSiswa'])->name('admin.finansialSiswa');
    Route::get('/formFinansial', [AdminController::class, 'formFinansial'])->name('admin.formFinansial');
    Route::get('/formUpdateFinansial', [AdminController::class, 'formUpdateFinansial'])->name('admin.formUpdateFinansial');

    // berita
    Route::get('/beritaAdmin', [AdminController::class, 'beritaAdmin'])->name('admin.beritaAdmin');
    Route::get('/formBerita', [AdminController::class, 'formBerita'])->name('admin.formBerita');
    Route::get('/formUpdateBerita', [AdminController::class, 'formUpdateBerita'])->name('admin.formUpdateBerita');

    // data siswa /////////////////////////////////
    Route::get('/data',[AdminController::class,'data'])->name('admin.data');
    Route::get('/formData', [AdminController::class, 'formData'])->name('admin.formData');
    Route::get('/formUpdateData', [AdminController::class, 'formUpdateData'])->name('admin.formUpdateData');
    
    // data guru
    Route::get('/dataGuru',[AdminController::class,'dataGuru'])->name('admin.dataGuru');
    Route::get('/formDataGuru', [AdminController::class, 'formDataGuru'])->name('admin.formDataGuru');
    Route::get('/formUpdateDataGuru', [AdminController::class, 'formUpdateDataGuru'])->name('admin.formUpdateDataGuru');
    
    // data OrangTua
    Route::get('/dataOrangtua',[AdminController::class,'dataOrangtua'])->name('admin.dataOrangtua');
    Route::get('/formDataOrangtua', [AdminController::class, 'formDataOrangtua'])->name('admin.formDataOrangtua');
    Route::get('/formUpdateDataOrangtua', [AdminController::class, 'formUpdateDataOrangtua'])->name('admin.formUpdateDataOrangtua');


    // fitur bantuan
    Route::get('/dokumenFiturBantuan', [AdminController::class, 'dokumenFiturBantuan'])->name('admin.dokumenFiturBantuan');
    Route::get('/formFiturBantuan', [AdminController::class, 'formFiturBantuan'])->name('admin.formFiturBantuan');
    Route::get('/formUpdateFiturBantuan', [AdminController::class, 'formUpdateFiturBantuan'])->name('admin.formUpdateFiturBantuan');

    // tentang sekolah
    Route::get('/tentangSekolahAdmin', [AdminController::class, 'tentangSekolahAdmin'])->name('admin.tentangSekolahAdmin');

    //saranDanMasukanAdmin
    Route::get('/saranDanMasukanAdmin', [AdminController::class, 'saranDanMasukanAdmin'])->name('admin.saranDanMasukanAdmin');
    Route::get('/saranDanMasukanAdminDetail', [AdminController::class, 'saranDanMasukanAdminDetail'])->name('admin.saranDanMasukanAdminDetail');

    //pesan
    Route::get('/pesanAdmin', [AdminController::class, 'pesanAdmin'])->name('admin.pesanAdmin');
    
    // Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
});

///////////////////////////////////////ORANG TUA////////////////////////////////////////////////////
Route::group(['prefix'=>'orangTua', 'middleware'=>['isOrangTuaMiddleware','auth']], function(){
    Route::get('/homepage',[OrangTuaController::class,'homepage'])->name('orangTua.homepage');

    Route::get('/jadwalKelas', [OrangTuaController::class, 'jadwalKelas'])->name('orangTua.jadwalKelas');
    Route::get('/jadwalNonAkademik', [OrangTuaController::class, 'jadwalNonAkademik'])->name('orangTua.jadwalNonAkademik');

    // finansial
    Route::get('/finansial', [OrangTuaController::class, 'finansial'])->name('orangTua.finansial');

    // berita
    Route::get('/berita', [OrangTuaController::class, 'berita'])->name('orangTua.berita');
    Route::get('/beritaDetail', [OrangTuaController::class, 'beritaDetail'])->name('orangTua.beritaDetail');

    // nilai
    Route::get('/nilai', [OrangTuaController::class, 'nilai'])->name('orangTua.nilai');

    // kehadiran
    Route::get('/kehadiran', [OrangTuaController::class, 'kehadiran'])->name('orangTua.kehadiran');

    // fitur bantuan
    Route::get('/fiturBantuan', [OrangTuaController::class, 'fiturBantuan'])->name('orangTua.fiturBantuan');

    // tentang
    Route::get('/tentangSekolah', [OrangTuaController::class, 'tentangSekolah'])->name('orangTua.tentangSekolah');

    // pesan
    Route::get('/pesan', [OrangTuaController::class, 'pesan'])->name('orangTua.pesan');

    // saranDanMasukan
    Route::get('/saranDanMasukan', [OrangTuaController::class, 'saranDanMasukan']);
    // Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    // Route::get('settings',[UserController::class,'settings'])->name('user.settings');
});

///////////////////////////////////////Guru////////////////////////////////////////////////////
Route::group(['prefix'=>'guru', 'middleware'=>['isGuru','auth']], function(){
    Route::get('/homepageGuru',[GuruController::class,'homepageGuru'])->name('guru.homepage');
    // nilai siswa
    Route::get('/nilaiSiswa', [GuruController::class, 'nilaiSiswa'])->name('guru.nilaiSiswa');
    Route::get('/updateNilaiSiswa', [GuruController::class, 'updateNilaiSiswa'])->name('guru.updateNilaiSiswa');

    // kehadiran siswa
    Route::get('/kehadiranSiswa', [GuruController::class, 'kehadiranSiswa'])->name('guru.kehadiranSiswa');
    Route::get('/updatekehadiranSiswa', [GuruController::class, 'updatekehadiranSiswa'])->name('guru.updatekehadiranSiswa');

    // saranDanMasukan
    Route::get('/saranDanMasukanGuru', [GuruController::class, 'saranDanMasukanGuru'])->name('guru.saranDanMasukanGuru');
    
    // Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    // Route::get('settings',[UserController::class,'settings'])->name('user.settings');
});