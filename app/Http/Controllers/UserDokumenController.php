<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreDokumenRequest;
use App\Http\Requests\UpdateDokumenRequest;

class UserDokumenController extends Controller
{
    public function index()
    {
        $dokumen=Dokumen::all();
        return view('document',compact('dokumen'));
    }

    public function download(Dokumen $dokumen)
{
    $filePath = public_path('assets/dokumen/' . $dokumen->file);

    return response()->download($filePath, $dokumen->file);
}
}
