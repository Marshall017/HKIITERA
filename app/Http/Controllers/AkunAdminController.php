<?php

namespace App\Http\Controllers;

use App\Models\AkunAdmin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;


class AkunAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=AkunAdmin::all();
        return view('admin.akunadmin.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.akunadmin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi data langsung pada objek Request
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role' => 'required',
    ]);

    // Membuat record baru dalam tabel dokumen
    AkunAdmin::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => $request->input('password'),
        'role' => $request->input('role'),
    ]);

    return redirect()->route('akunadmin.index')->with('success', 'Akun berhasil dibuat.');
}


    /**
     * Display the specified resource.
     */
    public function show(AkunAdmin $akunAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AkunAdmin $id)
    {
        $users=AkunAdmin::where('id',$id)->first();
        return view('admin.akunadmin.update',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AkunAdmin $id)
{
    // Validasi data langsung pada objek Request
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role' => 'required',
    ]);

    // Ambil akun admin berdasarkan ID
    $akunAdmin = AkunAdmin::findOrFail($id);

    // Perbarui data akun admin
    $akunAdmin->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => $request->input('password'),
        'role' => $request->input('role'),
    ]);

    return redirect()->route('akunadmin.index')->with('success', 'Akun berhasil diperbarui.');
}


public function destroy($id)
{
    // Temukan akun admin berdasarkan ID
    $akunAdmin = AkunAdmin::find($id);

    // Periksa apakah model ditemukan
    if (!$akunAdmin) {
        return redirect()->route('akunadmin.index')->with('error', 'Akun tidak ditemukan.');
    }

    // Hapus akun admin
    $akunAdmin->delete();

    return redirect()->route('akunadmin.index')->with('success', 'Akun berhasil dihapus.');
}

}
