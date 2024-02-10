<?php

namespace App\Http\Controllers;

use App\Models\Rekap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreDokumenRequest;
use App\Http\Requests\UpdateDokumenRequest;

class UserRekapController extends Controller
{
    public function index()
{
    $rekap = Rekap::all();

    // Ambil jumlah masing-masing nilai atribut "jenis"
    $jenisCounts = Rekap::select('jenis', DB::raw('count(*) as total'))
        ->groupBy('jenis')
        ->get();

    // Kirimkan data rekap dan jumlah jenis ke tampilan
    return view('userrekap', compact('rekap', 'jenisCounts'));
}

}
