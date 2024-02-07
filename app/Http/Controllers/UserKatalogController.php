<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreKatalogRequest;
use App\Http\Requests\UpdateKatalogRequest;

class UserKatalogController extends Controller
{
    public function index()
    {
        $katalog=Katalog::all();
        return view('catalog',compact('katalog'));
    }

    public function show( $id)
    {
        $katalog=Katalog::where('id',$id)->first();
        return view('isikatalog',compact('katalog'));
    }

    public function download(Katalog $katalog)
{
    $filePath = public_path('assets/katalog/' . $katalog->file);

    return response()->download($filePath, $katalog->file);
}
}
