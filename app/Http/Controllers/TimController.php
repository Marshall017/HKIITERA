<?php

namespace App\Http\Controllers;

use App\Models\Tim;
use Illuminate\Http\Request;
use App\Http\Requests\TimRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;




class TimController extends Controller
{
    public function index()
    {
        $tim=Tim::all();
        return view('admin.tim.index',compact('tim'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.tim.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TimRequest $request)
    {
       
        // Validasi request
       $validatedData= $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'prodi' => 'required',
            'scopus' => 'required',
            'scholar' => 'required',
            'sinta' => 'required',
            'linkedin' => 'required',
            'file_foto' => 'required|mimes:jpg,jpeg,png|max:30240', // Sesuaikan dengan tipe file yang diizinkan dan ukuran maksimal
        ]);

        $file1 = $validatedData['file_foto'];
        $filename1 = $file1->getClientOriginalName();
        $location1 = 'assets/tim/';

  
        $file1->move(public_path($location1), $filename1);


        // Membuat record baru dalam tabel dokumen
        Tim::create([
            'nama' => $request->input('nama'),
            'jabatan' => $request->input('jabatan'),
            'prodi' => $request->input('prodi'),
            'scopus' => $request->input('scopus'),
            'scholar' => $request->input('scholar'),
            'sinta' => $request->input('sinta'),
            'linkedin' => $request->input('linkedin'),
            'file_foto' => $filename1,
        ]);

        return redirect()->route('tim.index')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tim $tim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tim=Tim::where('id',$id)->first();
        return view('admin.tim.update',compact('tim'));
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, $id)
{
    // Validasi request
    $validatedData = $request->validate([
        'nama' => 'required',
        'jabatan' => 'required',
        'prodi' => 'required',
        'scopus' => 'required',
        'scholar' => 'required',
        'sinta' => 'required',
        'linkedin' => 'required',
        'file_foto' => 'nullable|image|mimes:jpg,jpeg,png|max:30240', // Ubah menjadi nullable untuk memperbolehkan foto kosong
    ]);

    // Mengambil data tim berdasarkan ID
    $tim = Tim::findOrFail($id);

    // Jika ada file yang diupload
    if ($request->hasFile('file_foto')) {
        $file = $validatedData['file_foto'];
        $filename = $file->getClientOriginalName();
        $location = 'assets/tim/';

        $file->move(public_path($location), $filename);

        // Hapus file lama jika sudah ada
        if ($tim->file_foto) {
            $oldFilePath = public_path($location . $tim->file_foto);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        // Update data tim dengan file baru dan kolom-kolom lainnya
        $tim->update([
            'nama' => $request->input('nama'),
            'jabatan' => $request->input('jabatan'),
            'prodi' => $request->input('prodi'),
            'scopus' => $request->input('scopus'),
            'scholar' => $request->input('scholar'),
            'sinta' => $request->input('sinta'),
            'linkedin' => $request->input('linkedin'),
            'file_foto' => $filename,
        ]);
    } else {
        // Jika tidak ada file yang diupload, update data tim tanpa mengubah file
        $tim->update([
            'nama' => $request->input('nama'),
            'jabatan' => $request->input('jabatan'),
            'prodi' => $request->input('prodi'),
            'scopus' => $request->input('scopus'),
            'scholar' => $request->input('scholar'),
            'sinta' => $request->input('sinta'),
            'linkedin' => $request->input('linkedin'),
        ]);
    }

    return redirect()->route('tim.index')->with('success', 'Data berhasil diperbarui.');
}

    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tim=Tim::where('id',$id)->first();
        // Menghapus file terkait dari folder assets/dokumen
        $filePath = public_path('assets/tim/' . $tim->file_foto);

        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        

        // Menghapus record dari database
        $tim->delete();

        return redirect()->route('tim.index')->with('success', 'Data berhasil dihapus.');
    }


}
