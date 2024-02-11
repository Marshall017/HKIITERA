<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use App\Http\Requests\TimRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class LogoController extends Controller
{
    public function index()
    {
        $logo = Logo::all();
        return view('admin.logo.index', compact('logo'));
    }

    public function create()
    {
        return view('admin.logo.create');
    }

    public function store(Request $request)
    {
        // Validasi request
        $validatedData = $request->validate([
            'logo' => 'required|image|mimes:jpg,jpeg,png|max:30240', // Sesuaikan dengan tipe file yang diizinkan dan ukuran maksimal
        ]);

        // Menyimpan file
        $file = $request->file('logo');
        $filename = 'logo.png'; // Mengubah nama file menjadi 'logo.png'
        $location = 'assets/logo/';
        $file->move(public_path($location), $filename);

        // Membuat record baru dalam tabel logo
        Logo::create([
            'logo' => $filename,
        ]);

        return redirect()->route('logo.index')->with('success', 'Logo berhasil disimpan.');
    }

    public function edit($id)
    {
        $logo = Logo::findOrFail($id);
        return view('admin.logo.update', compact('logo'));
    }

    public function update(Request $request, $id)
    {
        // Validasi request
        $validatedData = $request->validate([
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:30240', // Ubah menjadi nullable untuk memperbolehkan foto kosong
        ]);

        // Mengambil data logo berdasarkan ID
        $logo = Logo::findOrFail($id);

        // Jika ada file yang diupload
        if ($request->hasFile('logo')) {
            // Menghapus file lama
            $oldFilePath = public_path('assets/logo/' . $logo->logo);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }

            // Menyimpan file baru
            $file = $request->file('logo');
            $filename = 'logo.png'; // Mengubah nama file menjadi 'logo.png'
            $file->move(public_path('assets/logo/'), $filename);

            // Update data logo dengan file baru
            $logo->update([
                'logo' => $filename,
            ]);
        }

        return redirect()->route('logo.index')->with('success', 'Logo berhasil diperbarui.');
    }
}
