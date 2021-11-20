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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


///////////////////////////////////////ADMIN////////////////////////////////////////////////////
Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth']], function(){
    Route::get('homepage',[AdminController::class,'index'])->name('admin.homepage');
    // Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    // Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
});

///////////////////////////////////////ORANG TUA////////////////////////////////////////////////////
Route::group(['prefix'=>'orangTua', 'middleware'=>['isOrangTuaMiddleware','auth']], function(){
    Route::get('homepage',[OrangTuaController::class,'homepage'])->name('orangTua.homepage');
    // Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    // Route::get('settings',[UserController::class,'settings'])->name('user.settings');
});

///////////////////////////////////////Guru////////////////////////////////////////////////////
Route::group(['prefix'=>'user', 'middleware'=>['isGuru','auth']], function(){
    Route::get('dashboard',[GuruController::class,'index'])->name('user.dashboard');
    // Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    // Route::get('settings',[UserController::class,'settings'])->name('user.settings');
});