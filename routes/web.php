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
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\UserBeritaController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\UserDokumenController;
use App\Http\Controllers\DashboardUserController;


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

Route::resource('berita', BeritaController::class);
Route::resource('beritas', UserBeritaController::class);
Route::resource('isiberita', UserBeritaController::class);

Route::resource('pendaftaran', PendaftaranController::class);

// User
Route::get('/', [App\Http\Controllers\DashboardUserController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\DashboardUserController::class, 'index'])->name('home');

Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak');

Route::get('/sejarah', [App\Http\Controllers\SejarahController::class, 'index'])->name('sejarah');

Route::get('/layanan', [App\Http\Controllers\LayananController::class, 'index'])->name('layanan');

Route::get('/pembayaran', [App\Http\Controllers\PembayaranController::class, 'index'])->name('pembayaran');

Route::get('/statuspendaftaran', [App\Http\Controllers\StatusController::class, 'index'])->name('statuspendaftaran');

Route::get('/rekap', [App\Http\Controllers\RekapController::class, 'index'])->name('rekap');

Route::get('/panduan', [App\Http\Controllers\PanduanController::class, 'index'])->name('panduan');



Route::get('/alur', [App\Http\Controllers\AlurController::class, 'index'])->name('alur');

// Admin 
Route::get('/dashboardadmin', function () {
    return view('admin.index');
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

Route::get('/adminpembayaran', function () {
    return view('admin.pembayaran.index');
});
