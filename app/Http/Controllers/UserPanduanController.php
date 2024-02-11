<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panduan;
use App\Http\Controllers\Controller;

class UserPanduanController extends Controller
{
    public function index()
    {
        $panduans = Panduan::all();
        return view('userpanduan', compact('panduans'));
    }
    

}
