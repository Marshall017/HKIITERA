<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserBeritaController extends Controller
{
    public function index()
    {
        $beritass = Berita::paginate(3); 
        $latestBerita = Berita::orderBy('tanggal_unggah', 'desc')->take(3)->get();
        return view('beritass',compact('beritass','latestBerita'));
    }

    public function show( $id)
    {
        $berita=Berita::where('id',$id)->first();
        $latestBerita = Berita::orderBy('tanggal_unggah', 'desc')->take(3)->get();
        return view('isiberita',compact('berita','latestBerita'));
    }

}
