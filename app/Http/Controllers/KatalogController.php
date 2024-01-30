<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreKatalogRequest;
use App\Http\Requests\UpdateKatalogRequest;

class KatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $katalog=Katalog::all();
        return view('admin.katalog.index',compact('katalog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.katalog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi request
       $validatedData= $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'kategori' => 'required',
            'file' => 'required|file|mimes:pdf,doc,docx|max:10240', // Sesuaikan dengan tipe file yang diizinkan dan ukuran maksimal
        ]);

        $file1 = $validatedData['file'];
        $filename1 = $file1->getClientOriginalName();
        $location1 = 'assets/katalog/';

  
        $file1->move(public_path($location1), $filename1);


        // Membuat record baru dalam tabel 
        Katalog::create([
            'nama' => $request->input('nama'),
            'jenis' => $request->input('jenis'),
            'kategori' => $request->input('kategori'),
            'file' => $filename1,
        ]);

        return redirect()->route('katalog.index')->with('success', 'katalog berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Katalog $katalog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $katalog=Katalog::where('id',$id)->first();
        return view('admin.katalog.update',compact('katalog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi request
        $validatedData = $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'kategori' => 'required',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:10240', // Sesuaikan dengan tipe file yang diizinkan dan ukuran maksimal
        ]);

        // Mengambil data  berdasarkan ID
        $katalog = Katalog::findOrFail($id);

        // Jika ada file yang diupload
        if ($request->hasFile('file')) {
            $file1 = $validatedData['file'];
            $filename1 = $file1->getClientOriginalName();
            $location1 = 'assets/katalog/';

            $file1->move(public_path($location1), $filename1);

            // Hapus file lama jika sudah ada
            if ($katalog->file) {
                $oldFilePath = public_path($location1 . $katalog->file);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            // Update data dengan file baru
            $katalog->update([
                'nama' => $request->input('nama'),
                'jenis' => $request->input('jenis'),
                'kategori' => $request->input('kategori'),
                'file' => $filename1,
            ]);
        } else {
            // Jika tidak ada file yang diupload, update data tanpa mengubah file
            $katalog->update([
                'nama' => $request->input('nama'),
                'jenis' => $request->input('jenis'),
                'kategori' => $request->input('kategori'),
            ]);
        }

        return redirect()->route('katalog.index')->with('success', 'katalog berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $katalog=Katalog::where('id',$id)->first();
        // Menghapus file terkait dari folder assets/
        $filePath = public_path('assets/katalog/' . $katalog->file);

        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        

        // Menghapus record dari database
        $katalog->delete();

        return redirect()->route('katalog.index')->with('success', 'katalog berhasil dihapus.');
    }

    public function download(Katalog $katalog)
{
    $filePath = public_path('assets/katalog/' . $katalog->file);

    return response()->download($filePath, $katalog->file);
}
}
