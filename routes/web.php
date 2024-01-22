<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimController;
use App\Http\Controllers\AlurController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\UserTimController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\IsiberitaController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\UserDokumenController;


Auth::routes();

// Untuk redirect ke Google
Route::get('login/google/redirect', [SocialiteController::class, 'redirect'])
    ->middleware(['guest'])
    ->name('redirect');

// Untuk callback dari Google
Route::get('login/google/callback', [SocialiteController::class, 'callback'])
    ->middleware(['guest'])
    ->name('callback');


    Route::get('/home', function () {
        return view('home');
    })->middleware(['auth'])
      ->name('home');




Route::resource('dokumen', DokumenController::class);
Route::get('dokumen/{dokumen}/download', [DokumenController::class, 'download'])->name('dokumen.download');
Route::resource('userdokumen', UserDokumenController::class);
Route::get('userdokumen/{dokumen}/download', [UserDokumenController::class, 'download'])->name('userdokumen.download');

Route::resource('tim', TimController::class);
Route::resource('usertim', UserTimController::class);








// User
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak');

Route::get('/sejarah', [App\Http\Controllers\SejarahController::class, 'index'])->name('sejarah');

Route::get('/layanan', [App\Http\Controllers\LayananController::class, 'index'])->name('layanan');



Route::get('/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'index'])->name('pendaftaran');

Route::get('/pembayaran', [App\Http\Controllers\PembayaranController::class, 'index'])->name('pembayaran');

Route::get('/statuspendaftaran', [App\Http\Controllers\StatusController::class, 'index'])->name('statuspendaftaran');

Route::get('/rekap', [App\Http\Controllers\RekapController::class, 'index'])->name('rekap');



Route::get('/panduan', [App\Http\Controllers\PanduanController::class, 'index'])->name('panduan');

Route::get('/berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita');

Route::get('/detailberita', [App\Http\Controllers\IsiberitaController::class, 'index'])->name('isiberita');

Route::get('/alur', [App\Http\Controllers\AlurController::class, 'index'])->name('alur');

// Admin 
Route::get('/dashboardadmin', function () {
    return view('admin.index');
});

Route::get('/adminberita', function () {
    return view('admin.berita.index');
});

Route::get('/tambahberita', function () {
    return view('admin.berita.create');
});

Route::get('/editberita', function () {
    return view('admin.berita.update');
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

Route::get('/adminpanduan', function () {
    return view('admin.panduan.index');
});

Route::get('/tambahpanduan', function () {
    return view('admin.panduan.create');
});

Route::get('/editpanduan', function () {
    return view('admin.panduan.update');
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
