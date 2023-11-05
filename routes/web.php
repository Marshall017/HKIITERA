<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\SejarahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak');

Route::get('/sejarah', [App\Http\Controllers\SejarahController::class, 'index'])->name('sejarah');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/berita', function () {
    return view('admin.berita.indexberita');
});

Route::get('/createberita', function () {
    return view('admin.berita.createberita');
});

Route::get('/editberita', function () {
    return view('admin.berita.updateberita');
});

Route::get('/tim', function () {
    return view('admin.TIM.indextim');
});

Route::get('/tambahtim', function () {
    return view('admin.TIM.createtim');
});

Route::get('/edittim', function () {
    return view('admin.TIM.updatetim');
});

Route::get('/akunadmin', function () {
    return view('admin.AkunAdmin.indexakunadmin');
});

Route::get('/tambahakunadmin', function () {
    return view('admin.AkunAdmin.createakunadmin');
});

Route::get('/editakunadmin', function () {
    return view('admin.AkunAdmin.updateakunadmin');
});

Route::get('/panduan', function () {
    return view('admin.Panduan.indexpanduan');
});

Route::get('/tambahpanduan', function () {
    return view('admin.Panduan.createpanduan');
});

Route::get('/editpanduan', function () {
    return view('admin.Panduan.updatepanduan');
});

Route::get('/dokumen', function () {
    return view('admin.dokumen.indexdokumen');
});

Route::get('/tambahdokumen', function () {
    return view('admin.dokumen.createdokumen');
});

Route::get('/editdokumen', function () {
    return view('admin.dokumen.updatedokumen');
});