<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Tim;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardUserController extends Controller
{
    
    public function index()
    {
        $berita=Berita::all();
        $tim=TIm::all();
        return view('home',compact('tim','berita'));
       

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
