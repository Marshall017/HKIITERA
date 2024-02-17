@extends('layouts.adminapp')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" href="css/statuspendaftaran.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container py-5" style="background-color: #B80000; border-radius: 25px;">
        
        <div class="container py-6">
            <div class="card-header" style="background-color: #B80000; color: white;">
                <div class="d-flex justify-content-between align-items-center">
                    <div style="display: flex; align-items: center;">
                        <a href="/pendaftaran" style="text-decoration: none; margin-right: 10px;color:white">
                            <i class="fa-sharp fa-solid fa-arrow-left" style="font-size: 30px;"></i>
                        </a>
                        <span class="font-weight-bold" style="font-size: 30px;">Status Pendaftaran</span>
                    </div>                                        
                </div>
          </div>
    </div>
    <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('pendaftaran.update', $pendaftaran->id) }}" enctype="multipart/form-data">   
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="namaArsip" class="col-md-4 col-form-label">Nama</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="{{ $pendaftaran->nama }}" value="{{ $pendaftaran->nama }}" style="background-color: #E0E0E0;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodeArsip" class="col-md-4 col-form-label">Judul</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="{{ $pendaftaran->judul }}" value="{{ $pendaftaran->judul }}" style="background-color: #E0E0E0;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodeArsip" class="col-md-4 col-form-label">Jenis</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="jenis" name="jenis_permohonan" placeholder="{{ $pendaftaran->jenis_permohonan }}" value="{{ $pendaftaran->jenis_permohonan }}" style="background-color: #E0E0E0;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lokasiArsip" class="col-md-4 col-form-label">Status</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="lokasiArsip" name="status" style="background-color: #E0E0E0;">
                                        <option value="Pendaftaran" {{ $pendaftaran->status == 'Pendaftaran' ? 'selected' : '' }}>Pendaftaran</option>
                                        <option value="Pemeriksaan Formalitas" {{ $pendaftaran->status == 'Pemeriksaan Formalitas' ? 'selected' : '' }}>Pemeriksaan Formalitas</option>
                                        <option value="Menunggu Tanggapan Formalitas" {{ $pendaftaran->status == 'Menunggu Tanggapan Formalitas' ? 'selected' : '' }}>Menunggu Tanggapan Formalitas</option>
                                        <option value="Masa Pengumuman" {{ $pendaftaran->status == 'Masa Pengumuman' ? 'selected' : '' }}>Masa Pengumuman</option>
                                        <option value="Menunggu Pembayaran Subtantif" {{ $pendaftaran->status == 'Menunggu Pembayaran Subtantif' ? 'selected' : '' }}>Menunggu Pembayaran Subtantif</option>
                                        <option value="Subtantif Tahap Awal" {{ $pendaftaran->status == 'Subtantif Tahap Awal' ? 'selected' : '' }}>Subtantif Tahap Awal</option>
                                        <option value="Subtantif Tahap Lanjut" {{ $pendaftaran->status == 'Subtantif Tahap Lanjut' ? 'selected' : '' }}>Subtantif Tahap Lanjut</option>
                                        <option value="Subtantif Tahap Akhir" {{ $pendaftaran->status == 'Subtantif Tahap Akhir' ? 'selected' : '' }}>Subtantif Tahap Akhir</option>
                                        <option value="Menunggu Tanggapan Subtantif" {{ $pendaftaran->status == 'Menunggu Tanggapan Subtantif' ? 'selected' : '' }}>Menunggu Tanggapan Subtantif</option>
                                        <option value="Selesai" {{ $pendaftaran->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="background-color: #00adf1;">Submit</button>
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

    </div>
</body>
</html>


@endsection