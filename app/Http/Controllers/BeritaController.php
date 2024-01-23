<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    public function index()
    {
        $berita=Berita::all();
        return view('admin.berita.index',compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi request
        $validatedData= $request->validate([
            'judul' => 'required',
            'author' => 'required',
            'tanggal_unggah' => 'required|date',
            'isi_berita' => 'required',
            'upload_gambar' => 'required|mimes:jpeg,png,jpg,gif|max:20480', // Sesuaikan dengan tipe file dan ukuran maksimal yang diizinkan
        ]);
        $file1 = $validatedData['upload_gambar'];
        $filename1 = $file1->getClientOriginalName();
        $location1 = 'assets/berita/';

  
        $file1->move(public_path($location1), $filename1);

        // Membuat record baru dalam tabel berita
        Berita::create([
            'judul' => $request->input('judul'),
            'sub_judul' => $request->input('sub_judul'),
            'author' => $request->input('author'),
            'tanggal_unggah' => $request->input('tanggal_unggah'),
            'isi_berita' => $request->input('isi_berita'),
            'upload_gambar' => $filename1,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $berita=Berita::where('id',$id)->first();
        return view('admin.berita.update',compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi request
        $validatedData = $request->validate([
            'judul' => 'required',
            'author' => 'required',
            'tanggal_unggah' => 'required|date',
            'isi_berita' => 'required',
            'upload_gambar' => 'required|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan tipe file dan ukuran maksimal yang diizinkan
        ]);


        // Mengambil data dokumen berdasarkan ID
        $berita = Berita::findOrFail($id);

        // Jika ada file yang diupload
        if ($request->hasFile('upload_gambar')) {
            $file1 = $validatedData['upload_gambar'];
            $filename1 = $file1->getClientOriginalName();
            $location1 = 'assets/berita/';

            $file1->move(public_path($location1), $filename1);

            // Hapus file lama jika sudah ada
            if ($berita->upload_gambar) {
                $oldFilePath = public_path($location1 . $berita->upload_gambar);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }


        // Update record dalam tabel berita
        $berita->update([
            'judul' => $request->input('judul'),
            'sub_judul' => $request->input('sub_judul'),
            'author' => $request->input('author'),
            'tanggal_unggah' => $request->input('tanggal_unggah'),
            'isi_berita' => $request->input('isi_berita'),
            'upload_gambar' => $filename1,
        ]);
    } else {
        // Jika tidak ada file yang diupload, update data dokumen tanpa mengubah file
        $berita->update([
            'judul' => $request->input('judul'),
            'sub_judul' => $request->input('sub_judul'),
            'author' => $request->input('author'),
            'tanggal_unggah' => $request->input('tanggal_unggah'),
            'isi_berita' => $request->input('isi_berita'),
        ]);
    }
    return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berita=Berita::where('id',$id)->first();
        // Menghapus file terkait dari folder assets/dokumen
        $filePath = public_path('assets/berita/' . $berita->upload_gambar);

        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        

        // Menghapus record dari database
        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
    }

    
}
