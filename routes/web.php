<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PendaftaranController;

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
// User
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak');

Route::get('/sejarah', [App\Http\Controllers\SejarahController::class, 'index'])->name('sejarah');

Route::get('/layanan', [App\Http\Controllers\LayananController::class, 'index'])->name('layanan');

Route::get('/document', [App\Http\Controllers\DocumentController::class, 'index'])->name('document');

Route::get('/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'index'])->name('pendaftaran');

Route::get('/pembayaran', [App\Http\Controllers\PembayaranController::class, 'index'])->name('pembayaran');








// Admin 
Route::get('/dashboardadmin', function () {
    return view('admin.index');
});

Route::get('/berita', function () {
    return view('admin.berita.index');
});

Route::get('/tambahberita', function () {
    return view('admin.berita.create');
});

Route::get('/editberita', function () {
    return view('admin.berita.update');
});

Route::get('/tim', function () {
    return view('admin.tim.index');
});

Route::get('/tambahtim', function () {
    return view('admin.tim.create');
});

Route::get('/edittim', function () {
    return view('admin.tim.update');
});

Route::get('/akunadmin', function () {
    return view('admin.akunadmin.index');
});

Route::get('/tambahakunadmin', function () {
    return view('admin.akunadmin.create');
});

Route::get('/editakunadmin', function () {
    return view('admin.akunadmin.update');
});

Route::get('/panduan', function () {
    return view('admin.panduan.index');
});

Route::get('/tambahpanduan', function () {
    return view('admin.panduan.create');
});

Route::get('/editpanduan', function () {
    return view('admin.panduan.update');
});

Route::get('/dokumen', function () {
    return view('admin.dokumen.index');
});

Route::get('/tambahdokumen', function () {
    return view('admin.dokumen.create');
});

Route::get('/editdokumen', function () {
    return view('admin.dokumen.update');
});

Route::get('/adminpendaftaran', function () {
    return view('admin.pendaftaran.index');
});

Route::get('/adminstatuspendaftaran', function () {
    return view('admin.pendaftaran.status');
});
Route::get('/adminpembayaran', function () {
    return view('admin.pembayaran.index');
});