<?php
namespace App\Http\Controllers;

use App\Models\Rekap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class RekapController extends Controller
{
    public function index()
{
    $rekap = Rekap::all();

    // Ambil jumlah masing-masing nilai atribut "jenis"
    $jenisCounts = Rekap::select('jenis', DB::raw('count(*) as total'))
        ->groupBy('jenis')
        ->get();

    // Kirimkan data rekap dan jumlah jenis ke tampilan
    return view('admin.rekap.index', compact('rekap', 'jenisCounts'));
}

    public function create()
    {
        return view('admin.rekap.create');
    }

    public function store(Request $request)
{
    // Validasi data yang diterima dari request
    $validatedData = $request->validate([
        'nomor_pendaftaran' => 'required|string',
        'jenis' => 'required|string',
        'judul' => 'required|string',
        'pemegang' => 'required|string',
        'inventor' => 'required|string',
        'sertif' => 'required|mimes:jpeg,png,jpg,gif|max:20480',
    ]);

    $file1 = $validatedData['sertif'];
        $filename1 = $file1->getClientOriginalName();
        $location1 = 'assets/rekap/';
        $file1->move(public_path($location1), $filename1);

    // Buat paten baru berdasarkan data yang valid
    Rekap::create([
        'nomor_pendaftaran' => $request->input('nomor_pendaftaran'),
        'jenis' => $request->input('jenis'),
        'judul' => $request->input('judul'),
        'pemegang' => $request->input('pemegang'),
        'inventor' => $request->input('inventor'),
        'sertif' => $filename1,
    ]);

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('rekap.index')->with('success', 'Data berhasil disimpan.');
}


    public function edit($id)
    {
        $rekap = Rekap::where('id',$id)->first();
        return view('admin.rekap.update', compact('rekap'));
    }

    public function update(Request $request, $id)
{
    // Validasi data yang diterima dari request
    $validatedData = $request->validate([
        'nomor_pendaftaran' => 'required|string',
        'jenis' => 'required|string',
        'judul' => 'required|string',
        'pemegang' => 'required|string',
        'inventor' => 'required|string',
        'sertif' => 'required|mimes:jpeg,png,jpg,gif|max:20480',
    ]);

    // Temukan paten berdasarkan ID
    $rekap = Rekap::findOrFail($id);

    // Jika ada file yang diupload
    if ($request->hasFile('sertif')) {
        $file1 = $validatedData['sertif'];
        $filename1 = $file1->getClientOriginalName();
        $location1 = 'assets/rekap/';

        $file1->move(public_path($location1), $filename1);
        // Hapus file lama jika sudah ada
        if ($rekap->sertif) {
            $oldFilePath = public_path($location1 . $rekap->sertif);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        // Update data dengan file baru
        $rekap->update([
            'nomor_pendaftaran' => $request->input('nomor_pendaftaran'),
            'jenis' => $request->input('jenis'),
            'judul' => $request->input('judul'),
            'pemegang' => $request->input('pemegang'),
            'inventor' => $request->input('inventor'),
            'sertif' => $filename1,
        ]);
    } else {
        // Jika tidak ada file yang diupload, update data tanpa mengubah file
        $rekap->update([
        'nomor_pendaftaran' => $request->input('nomor_pendaftaran'),
        'jenis' => $request->input('jenis'),
        'judul' => $request->input('judul'),
        'pemegang' => $request->input('pemegang'),
        'inventor' => $request->input('inventor'),
        
        ]);
    }

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('rekap.index')->with('success', 'Data berhasil diperbarui.');
}


    public function destroy($id)
    {
        $rekap = Rekap::where('id',$id)->first();
        // Menghapus file terkait dari folder assets/
        $filePath = public_path('assets/rekap/' . $rekap->sertif);

        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        $rekap->delete();
        return redirect()->route('rekap.index')->with('success', 'Rekap berhasil dihapus.');
    }
}
