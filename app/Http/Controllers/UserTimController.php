<?php

namespace App\Http\Controllers;

use App\Models\Tim;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserTimController extends Controller
{
    public function index()
    {
        $tims=Tim::all();
       
        return view('usertim',compact('tims'));
    }


}
