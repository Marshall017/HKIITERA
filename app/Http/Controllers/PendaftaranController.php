<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Routing\Controller;
use ZipArchive;
use Illuminate\Support\Facades\Storage;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftaran=Pendaftaran::all();
        return view('admin.pendaftaran.index',compact('pendaftaran'));
    }

    public function create()
    {

        return view('admin.pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        
        // Validasi request
       $validatedData= $request->validate([
        'email' => 'required',
        'jenis_permohonan' => 'required',
        'nama' => 'required',
        'no_hp' => 'required',
        'prodi' => 'required',
        'jurusan' => 'required',
        'judul' => 'required',
        'deskripsi_paten_word' => 'required|mimes:doc,docx|max:10240', 
        'deskripsi_paten_pdf' => 'required|mimes:pdf|max:10240',
        'abstrak_word' => 'required|mimes:doc,docx|max:10240',
        'abstrak_pdf' => 'required|mimes:pdf|max:10240',
        'klaim_pdf' => 'required|mimes:pdf|max:10240',
        'gambar_invensi_pdf' => 'required|mimes:pdf|max:10240',
        'formulir_permohonan_paten_pdf' => 'required|mimes:pdf|max:10240',
        'formulir_permohonan_substantif_paten_pdf' => 'required|mimes:pdf|max:10240',
        'surat_pengalihan_hak_itera_pdf' => 'required|mimes:pdf|max:10240',
        'surat_pengalihan_hak_itera_word' => 'required|mimes:doc,docx|max:10240',
        'surat_pernyataan_kepemilikan_invensi_pdf' => 'required|mimes:pdf|max:10240',
        'surat_pernyataan_kepemilikan_invensi_word' => 'required|mimes:doc,docx|max:10240',
        'foto_ktp_hak_cipta_master_word' => 'required|mimes:doc,docx|max:10240',
        ]);

        

        $file1 = $validatedData['deskripsi_paten_word'];
        $filename1 = $file1->getClientOriginalName();
        $location1 = 'assets/pendaftaran/';
        $file1->move(public_path($location1), $filename1);

        $file2 = $validatedData['deskripsi_paten_pdf'];
        $filename2 = $file2->getClientOriginalName();
        $location2 = 'assets/pendaftaran/';
        $file2->move(public_path($location2), $filename2);

        $file3 = $validatedData['abstrak_word'];
        $filename3 = $file3->getClientOriginalName();
        $location3 = 'assets/pendaftaran/';
        $file3->move(public_path($location3), $filename3);

        $file4 = $validatedData['abstrak_pdf'];
        $filename4 = $file4->getClientOriginalName();
        $location4 = 'assets/pendaftaran/';
        $file4->move(public_path($location4), $filename4);

        $file5 = $validatedData['klaim_pdf'];
        $filename5 = $file5->getClientOriginalName();
        $location5 = 'assets/pendaftaran/';
        $file5->move(public_path($location5), $filename5);

        $file6 = $validatedData['gambar_invensi_pdf'];
        $filename6 = $file6->getClientOriginalName();
        $location6 = 'assets/pendaftaran/';
        $file6->move(public_path($location6), $filename6);

        $file7 = $validatedData['formulir_permohonan_paten_pdf'];
        $filename7 = $file7->getClientOriginalName();
        $location7 = 'assets/pendaftaran/';
        $file7->move(public_path($location7), $filename7);

        $file8 = $validatedData['formulir_permohonan_substantif_paten_pdf'];
        $filename8 = $file8->getClientOriginalName();
        $location8 = 'assets/pendaftaran/';
        $file8->move(public_path($location8), $filename8);

        $file9 = $validatedData['surat_pengalihan_hak_itera_pdf'];
        $filename9 = $file9->getClientOriginalName();
        $location9 = 'assets/pendaftaran/';
        $file9->move(public_path($location9), $filename9);

        $file10 = $validatedData['surat_pengalihan_hak_itera_word'];
        $filename10 = $file10->getClientOriginalName();
        $location10 = 'assets/pendaftaran/';
        $file10->move(public_path($location10), $filename10);

        $file11 = $validatedData['surat_pernyataan_kepemilikan_invensi_pdf'];
        $filename11 = $file11->getClientOriginalName();
        $location11 = 'assets/pendaftaran/';
        $file11->move(public_path($location11), $filename11);

        $file12 = $validatedData['surat_pernyataan_kepemilikan_invensi_word'];
        $filename12 = $file12->getClientOriginalName();
        $location12 = 'assets/pendaftaran/';
        $file12->move(public_path($location12), $filename12);

        $file13 = $validatedData['foto_ktp_hak_cipta_master_word'];
        $filename13 = $file13->getClientOriginalName();
        $location13 = 'assets/pendaftaran/';
        $file13->move(public_path($location13), $filename13);

        // Membuat record baru dalam tabel dokumen
        Pendaftaran::create([
            'email' => $request->input('email'),
            'jenis_permohonan' => $request->input('jenis_permohonan'),
            'nama' => $request->input('nama'),
            'no_hp' => $request->input('no_hp'),
            'prodi' => $request->input('prodi'),
            'jurusan' => $request->input('jurusan'),
            'judul' => $request->input('judul'),
            'deskripsi_paten_word' => $filename1,
            'deskripsi_paten_pdf'=> $filename2,
            'abstrak_word'=> $filename3,
            'abstrak_pdf'=> $filename4,
            'klaim_pdf'=> $filename5,
            'gambar_invensi_pdf'=> $filename6,
            'formulir_permohonan_paten_pdf' => $filename7,
           'formulir_permohonan_substantif_paten_pdf'=> $filename8,
           'surat_pengalihan_hak_itera_pdf'=> $filename9,
           'surat_pengalihan_hak_itera_word' => $filename10,
            'surat_pernyataan_kepemilikan_invensi_pdf'=> $filename11,
            'surat_pernyataan_kepemilikan_invensi_word'=> $filename12,
            'foto_ktp_hak_cipta_master_word'=> $filename13,
            'status'=> 'Pendaftaran',
        ]);

        return redirect()->route('pembayaran')->with('success', 'Dokumen berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pendaftaran=Pendaftaran::where('id',$id)->first();
        return view('admin.pendaftaran.update',compact('pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         // Validasi request
         $validatedData = $request->validate([
            'nama' => 'required',
            'jenis_permohonan' => 'required',
            'judul' => 'required',
            'status' => 'required',
            'deskripsi_paten_word' => 'nullable|mimes:pdf,doc,docx|max:10240', // Sesuaikan dengan tipe file yang diizinkan dan ukuran maksimal
        ]);

        // Mengambil data dokumen berdasarkan ID
        $pendaftaran = Pendaftaran::findOrFail($id);

        // Jika ada file yang diupload
        if ($request->hasFile( 'deskripsi_paten_word')) {
            $file1 = $validatedData[ 'deskripsi_paten_word'];
            $filename1 = $file1->getClientOriginalName();
            $location1 = 'assets/pendaftaran/';

            $file1->move(public_path($location1), $filename1);

            // Hapus file lama jika sudah ada
            if ($pendaftaran->file) {
                $oldFilePath = public_path($location1 . $pendaftaran->file);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            // Update data dokumen dengan file baru
            $pendaftaran->update([
                'nama' => $request->input('nama'),
                'jenis_permohonan' => $request->input('jenis_permohonan'),
                'judul' => $request->input('judul'),
                'status' => $request->input('status'),
                'deskripsi_paten_word' => $filename1,
            ]);
        } else {
            // Jika tidak ada file yang diupload, update data dokumen tanpa mengubah file
            $pendaftaran->update([
                'nama' => $request->input('nama'),
                'jenis_permohonan' => $request->input('jenis_permohonan'),
                'judul' => $request->input('judul'),
                'status' => $request->input('status'),
            ]);
        }

        return redirect()->route('pendaftaran.index')->with('success', 'Dokumen berhasil diperbarui.');
    }
    


    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pendaftaran=Pendaftaran::where('id',$id)->first();
        // Menghapus file terkait dari folder assets/dokumen
        $filePath = public_path('assets/pendaftaran/' . $pendaftaran->file);

        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        

        // Menghapus record dari database
        $pendaftaran->delete();

        return redirect()->route('pendaftaran.index')->with('success', 'Dokumen berhasil dihapus.');
    }

    public function download(Pendaftaran $pendaftaran)
{
    // Mendapatkan daftar file terkait dengan pendaftaran
    $files = [
        public_path('assets/pendaftaran/' . $pendaftaran->deskripsi_paten_word),
        public_path('assets/pendaftaran/' . $pendaftaran->deskripsi_paten_pdf),
        public_path('assets/pendaftaran/' . $pendaftaran->abstrak_word),
        public_path('assets/pendaftaran/' . $pendaftaran->abstrak_pdf),
        public_path('assets/pendaftaran/' . $pendaftaran->klaim_pdf),
        public_path('assets/pendaftaran/' . $pendaftaran->gambar_invensi_pdf),
        public_path('assets/pendaftaran/' . $pendaftaran->formulir_permohonan_paten_pdf),
        public_path('assets/pendaftaran/' . $pendaftaran->formulir_permohonan_substantif_paten_pdf),
        public_path('assets/pendaftaran/' . $pendaftaran->surat_pengalihan_hak_itera_pdf),
        public_path('assets/pendaftaran/' . $pendaftaran->surat_pengalihan_hak_itera_word),
        public_path('assets/pendaftaran/' . $pendaftaran->surat_pernyataan_kepemilikan_invensi_pdf),
        public_path('assets/pendaftaran/' . $pendaftaran->surat_pernyataan_kepemilikan_invensi_word),
        public_path('assets/pendaftaran/' . $pendaftaran->foto_ktp_hak_cipta_master_word),
    ];

    $zipFileName = 'pendaftaran_' . $pendaftaran->id . '.zip';

    $zip = new ZipArchive;

    if ($zip->open(public_path($zipFileName), ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
        foreach ($files as $file) {
            // Menambahkan file ke dalam ZIP
            $zip->addFile($file, basename($file));
        }

        $zip->close();

        // Menghapus file ZIP setelah didownload
        return response()->download(public_path($zipFileName))->deleteFileAfterSend(true);
    } else {
        // Jika gagal membuat ZIP, kembalikan ke halaman sebelumnya dengan pesan kesalahan
        return redirect()->back()->with('error', 'Failed to create ZIP file.');
    }
}
}
