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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('user.home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.home');

Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('user.kontak');

Route::get('/sejarah', [App\Http\Controllers\SejarahController::class, 'index'])->name('user.sejarah');

Route::get('/rekap', function () {
    return view('user.rekap');
});