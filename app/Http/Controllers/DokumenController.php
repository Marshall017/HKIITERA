<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreDokumenRequest;
use App\Http\Requests\UpdateDokumenRequest;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokumen=Dokumen::all();
        return view('admin.dokumen.index',compact('dokumen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.dokumen.create');
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
            'file' => 'required|file|mimes:pdf,doc,docx|max:102400', // Sesuaikan dengan tipe file yang diizinkan dan ukuran maksimal
        ]);

        $file1 = $validatedData['file'];
        $filename1 = $file1->getClientOriginalName();
        $location1 = 'assets/dokumen/';

  
        $file1->move(public_path($location1), $filename1);


        // Membuat record baru dalam tabel dokumen
        Dokumen::create([
            'nama' => $request->input('nama'),
            'jenis' => $request->input('jenis'),
            'kategori' => $request->input('kategori'),
            'file' => $filename1,
        ]);

        return redirect()->route('dokumen.index')->with('success', 'Dokumen berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokumen $dokumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dokumen=Dokumen::where('id',$id)->first();
        return view('admin.dokumen.update',compact('dokumen'));
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

        // Mengambil data dokumen berdasarkan ID
        $dokumen = Dokumen::findOrFail($id);

        // Jika ada file yang diupload
        if ($request->hasFile('file')) {
            $file1 = $validatedData['file'];
            $filename1 = $file1->getClientOriginalName();
            $location1 = 'assets/dokumen/';

            $file1->move(public_path($location1), $filename1);

            // Hapus file lama jika sudah ada
            if ($dokumen->file) {
                $oldFilePath = public_path($location1 . $dokumen->file);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            // Update data dokumen dengan file baru
            $dokumen->update([
                'nama' => $request->input('nama'),
                'jenis' => $request->input('jenis'),
                'kategori' => $request->input('kategori'),
                'file' => $filename1,
            ]);
        } else {
            // Jika tidak ada file yang diupload, update data dokumen tanpa mengubah file
            $dokumen->update([
                'nama' => $request->input('nama'),
                'jenis' => $request->input('jenis'),
                'kategori' => $request->input('kategori'),
            ]);
        }

        return redirect()->route('dokumen.index')->with('success', 'Dokumen berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dokumen=Dokumen::where('id',$id)->first();
        // Menghapus file terkait dari folder assets/dokumen
        $filePath = public_path('assets/dokumen/' . $dokumen->file);

        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        

        // Menghapus record dari database
        $dokumen->delete();

        return redirect()->route('dokumen.index')->with('success', 'Dokumen berhasil dihapus.');
    }

    public function download(Dokumen $dokumen)
{
    $filePath = public_path('assets/dokumen/' . $dokumen->file);

    return response()->download($filePath, $dokumen->file);
}
}
