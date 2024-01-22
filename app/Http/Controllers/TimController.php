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
        $tim=TIm::where('id',$id)->first();
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
            'file_foto' => 'required|file_foto|mimes:jpg,jpeg,png|max:30240', // Sesuaikan dengan tipe file yang diizinkan dan ukuran maksimal
        ]);

        // Mengambil data dokumen berdasarkan ID
        $tim = Tim::findOrFail($id);

        // Jika ada file yang diupload
        if ($request->hasFile('file_foto')) {
            $file1 = $validatedData['file_foto'];
            $filename1 = $file1->getClientOriginalName();
            $location1 = 'assets/tim/';

            $file1->move(public_path($location1), $filename1);

            // Hapus file lama jika sudah ada
            if ($tim->file_foto) {
                $oldFilePath = public_path($location1 . $tim->file_foto);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            // Update data dokumen dengan file baru
            $tim->update([
                'nama' => $request->input('nama'),
                'jabatan' => $request->input('jabatan'),
                'prodi' => $request->input('prodi'),
                'file_foto' => $filename1,
            ]);
        } else {
            // Jika tidak ada file yang diupload, update data dokumen tanpa mengubah file
            $tim->update([
                'nama' => $request->input('nama'),
                'jabatan' => $request->input('jabatan'),
                'prodi' => $request->input('prodi'),
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
