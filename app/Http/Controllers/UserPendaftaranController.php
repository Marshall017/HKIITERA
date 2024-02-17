<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Http\Controllers\Controller;

class UserPendaftaranController extends Controller
{
    public function index()
    {
        // Mendapatkan email pengguna yang sedang login
        $userEmail = auth()->user()->email;
        
        // Mengambil data pendaftaran yang sesuai dengan email pengguna yang login
        $pendaftaran = Pendaftaran::where('email', $userEmail)->get();
        
        return view('statuspendaftaran', compact('pendaftaran'));
    }
}
