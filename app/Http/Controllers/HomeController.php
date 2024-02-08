<?php

namespace App\Http\Controllers;

use App\Models\Tim;
use App\Models\Berita;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role==1){
            $dokumen=Dokumen::all();
            return view('admin.dokumen.index',compact('dokumen'));
        }
        elseif(Auth::user()->role==2){
            $berita=Berita::all();
            $tim=Tim::all();
            return view('home',compact('tim','berita'));
        }
        return view('home');
    }
}
