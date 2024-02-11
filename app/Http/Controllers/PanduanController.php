<?php

namespace App\Http\Controllers;

use App\Models\Panduan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PanduanController extends Controller
{
    public function index()
    {
        $panduans=Panduan::all();
        return view('admin.panduan.index',compact('panduans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.panduan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi request
        $validatedData= $request->validate([
            'kategori' => 'required',
            'textfile' => 'required',
            'gambar' => 'required|mimes:jpeg,png,jpg,gif|max:20480', // Sesuaikan dengan tipe file dan ukuran maksimal yang diizinkan
        ]);
        $file1 = $validatedData['gambar'];
        $filename1 = $file1->getClientOriginalName();
        $location1 = 'assets/panduan/';

  
        $file1->move(public_path($location1), $filename1);

        // Membuat record baru dalam tabel berita
        Panduan::create([
            'kategori' => $request->input('kategori'),
            'textfile' => $request->input('textfile'),
            'gambar' => $filename1,
        ]);

        return redirect()->route('panduan.index')->with('success', 'Panduan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Panduan $panduans)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $panduans=Panduan::where('id',$id)->first();
        return view('admin.panduan.update',compact('panduans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi request
        $validatedData = $request->validate([
            'kategori' => 'required',
            'textfile' => 'required',
            'gambar' => 'required|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan tipe file dan ukuran maksimal yang diizinkan
        ]);


        // Mengambil data dokumen berdasarkan ID
        $panduans = Panduan::findOrFail($id);

        // Jika ada file yang diupload
        if ($request->hasFile('gambar')) {
            $file1 = $validatedData['gambar'];
            $filename1 = $file1->getClientOriginalName();
            $location1 = 'assets/panduan/';

            $file1->move(public_path($location1), $filename1);

            // Hapus file lama jika sudah ada
            if ($panduans->gambar) {
                $oldFilePath = public_path($location1 . $panduans->gambar);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }


        // Update record dalam tabel berita
        $panduans->update([
            'kategori' => $request->input('kategori'),
            'textfile' => $request->input('textfile'),
            'gambar' => $filename1,
        ]);
    } else {
        // Jika tidak ada file yang diupload, update data dokumen tanpa mengubah file
        $panduans->update([
            'kategori' => $request->input('kategori'),
            'textfile' => $request->input('textfile'),
        ]);
    }
    return redirect()->route('panduan.index')->with('success', 'Panduan berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $panduans=Panduan::where('id',$id)->first();
        // Menghapus file terkait dari folder assets/dokumen
        $filePath = public_path('assets/panduan/' . $panduans->gambar);

        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        

        // Menghapus record dari database
        $panduans->delete();

        return redirect()->route('panduan.index')->with('success', 'Panduan berhasil dihapus.');
    }
    
}
