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
    // END OF IMPORT DATA SESSION //



    // jadwal
    // jadwal kelasXXXXXXX
    // Route::get('/jadwalKelasSiswa', [AdminController::class, 'jadwalKelasSiswa'])->name('admin.jadwalKelasSiswa');
    // Route::get('/formKelasSiswa', [AdminController::class, 'formKelasSiswa'])->name('admin.formKelasSiswa');
    // Route::get('/formUpdateKelasSiswa', [AdminController::class, 'formUpdateKelasSiswa'])->name('admin.formUpdateKelasSiswa');

    // jadwal non XXXXXXXXXXX
    // Route::get('/jadwalNonAkademikSiswa', [AdminController::class, 'jadwalNonAkademikSiswa'])->name('admin.jadwalNonAkademikSiswa');
    // Route::get('/formNonAkademikSiswa', [AdminController::class, 'formNonAkademikSiswa'])->name('admin.formNonAkademikSiswa');
    // Route::get('/formUpdateJadwalNonAkademik', [AdminController::class, 'formUpdateJadwalNonAkademik'])->name('admin.formUpdateJadwalNonAkademik');

    // Finansial √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    // Route::get('/finansialSiswa', [AdminController::class, 'finansialSiswa'])->name('admin.finansialSiswa');  
    // Route::get('/formFinansial', [AdminController::class, 'formFinansial'])->name('admin.formFinansial');
    // Route::get('/formUpdateFinansial', [AdminController::class, 'formUpdateFinansial'])->name('admin.formUpdateFinansial');

    // berita √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    Route::get('/beritaAdmin', [AdminController::class, 'beritaAdmin'])->name('admin.beritaAdmin');
    Route::get('/tambahberita', [AdminController::class, 'tambahberita'])->name('admin.tambahberita');
    Route::post('/saveberita', 'App\Http\Controllers\AdminController@saveberita')->name('admin.saveberita');
    Route::get('/lihatberita/{id}', 'App\Http\Controllers\AdminController@lihatberita')->name('admin.lihatberita');
    Route::get('/editberita/{id}', 'App\Http\Controllers\AdminController@editberita')->name('admin.editberita');
	Route::put('/updateberita/{id}', 'App\Http\Controllers\AdminController@updateberita')->name('admin.updateberita');
	Route::get('/hapusberita/{id}', 'App\Http\Controllers\AdminController@hapusberita')->name('admin.hapusberita');
    // Route::get('/formBerita', [AdminController::class, 'formBerita'])->name('admin.formBerita');
    Route::get('/formBerita', [AdminController::class, 'formBerita'])->name('admin.formBerita');
    Route::get('/formUpdateBerita', [AdminController::class, 'formUpdateBerita'])->name('admin.formUpdateBerita');

    // data siswa XXXXXXXXX
    // Route::get('/data',[AdminController::class,'data'])->name('admin.data');
    // Route::get('/formData', [AdminController::class, 'formData'])->name('admin.formData');
    // Route::get('/formUpdateData', [AdminController::class, 'formUpdateData'])->name('admin.formUpdateData');
    
    // data guruXXXXXXXXXXXXXX
    // Route::get('/dataGuru',[AdminController::class,'dataGuru'])->name('admin.dataGuru');
    // Route::get('/formDataGuru', [AdminController::class, 'formDataGuru'])->name('admin.formDataGuru');
    // Route::get('/formUpdateDataGuru', [AdminController::class, 'formUpdateDataGuru'])->name('admin.formUpdateDataGuru');
    
    // data OrangTuaXXXXXXXXXXXXXXXXX
    // Route::get('/dataOrangtua',[AdminController::class,'dataOrangtua'])->name('admin.dataOrangtua');
    // Route::get('/formDataOrangtua', [AdminController::class, 'formDataOrangtua'])->name('admin.formDataOrangtua');
    // Route::get('/formUpdateDataOrangtua', [AdminController::class, 'formUpdateDataOrangtua'])->name('admin.formUpdateDataOrangtua');


    // fitur bantuan √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    Route::get('/dokumenFiturBantuan', [AdminController::class, 'dokumenFiturBantuan'])->name('admin.dokumenFiturBantuan');
  	Route::get('/tambahunduhan', [AdminController::class, 'tambahunduhan'])->name('admin.tambahunduhan');
    Route::post('/saveunduhan', 'App\Http\Controllers\AdminController@saveunduhan')->name('admin.saveunduhan');
    Route::get('/hapusunduhan/{id}', 'App\Http\Controllers\AdminController@hapusunduhan')->name('admin.hapusunduhan');
    Route::get('/formFiturBantuan', [AdminController::class, 'formFiturBantuan'])->name('admin.formFiturBantuan');
    Route::get('/formUpdateFiturBantuan', [AdminController::class, 'formUpdateFiturBantuan'])->name('admin.formUpdateFiturBantuan');

    // tentang sekolah √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    // Route::get('/tentangSekolahAdmin', [AdminController::class, 'tentangSekolahAdmin'])->name('admin.tentangSekolahAdmin');

    //saranDanMasukanAdmin √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    Route::get('/saranDanMasukanAdmin', [AdminController::class, 'saranDanMasukanAdmin'])->name('admin.saranDanMasukanAdmin');
    Route::get('/saranDanMasukanAdminDetail', [AdminController::class, 'saranDanMasukanAdminDetail'])->name('admin.saranDanMasukanAdminDetail');
    

    //pesan
    // Route::get('/pesanAdmin', [AdminController::class, 'pesanAdmin'])->name('admin.pesanAdmin');
    
    // Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
});

///////////////////////////////////////ORANG TUA////////////////////////////////////////////////////
Route::group(['prefix'=>'orangTua', 'middleware'=>['isOrangTuaMiddleware','auth']], function(){
    Route::get('/homepage',[OrangTuaController::class,'homepage'])->name('orangTua.homepage');


    // jadwal kelas √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    Route::get('/jadwalKelas', [OrangTuaController::class, 'jadwalKelas']);
    
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

    // fitur bantuan √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    Route::get('/fiturBantuan', [OrangTuaController::class, 'fiturBantuan']);
    

    // tentang √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    // Route::get('/tentangSekolah', [OrangTuaController::class, 'tentangSekolah']);

    // pesan √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    // Route::get('/pesan', [OrangTuaController::class, 'pesan']);
    Route::view('/pesan', 'livechatings.messages');

    // saranDanMasukan √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
    Route::get('/saranDanMasukan', [OrangTuaController::class, 'saranDanMasukan']);
    // Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    // Route::get('settings',[UserController::class,'settings'])->name('user.settings');
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
    Route::get('/updatekehadiranSiswa', [GuruController::class, 'updatekehadiranSiswa']);

    // saranDanMasukan
    Route::get('/saranDanMasukanGuru', [GuruController::class, 'saranDanMasukanGuru']);
    
    // PESAN
    // Route::get('/pesanGuru', [GuruController::class, 'pesanGuru']);
    Route::view('/pesanGuru', 'livechatings.messages-guru');
    
    // FITUR BANTUANNNN
    Route::get('/pusatBantuanGuru', [GuruController::class, 'pusatBantuanGuru']);
    
    // jadwalll
    Route::get('/jadwalAkadaNonAkaGuru', [GuruController::class, 'jadwalAkadaNonAkaGuru']);
    
    // beritaa
    Route::get('/beritaGuru', [GuruController::class, 'beritaGuru']);
    Route::get('/lihatberita/{id}', 'App\Http\Controllers\GuruController@lihatberita')->name('guru.lihatberita');
    Route::get('/beritaDetailGuru', [GuruController::class, 'beritaDetailGuru']);

    
    // Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    // Route::get('settings',[UserController::class,'settings'])->name('user.settings');
});

// Route::view('/chat', 'livechatings.messages');

