<?php
namespace App\Http\Controllers;

use App\Models\Rekap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    ]);

    // Buat paten baru berdasarkan data yang valid
    Rekap::create($validatedData);

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('rekap.index')->with('success', 'Data berhasil disimpan.');
}


    public function edit($id)
    {
        $rekap = Rekap::findOrFail($id)->first();
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
    ]);

    // Temukan paten berdasarkan ID
    $rekap = Rekap::findOrFail($id);

    // Perbarui data paten dengan data yang valid
    $rekap->update($validatedData);

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('rekap.index')->with('success', 'Data berhasil diperbarui.');
}


    public function destroy($id)
    {
        $rekap = Rekap::where('id',$id)->first();
        $rekap->delete();
        return redirect()->route('rekap.index')->with('success', 'Rekap berhasil dihapus.');
    }
}
