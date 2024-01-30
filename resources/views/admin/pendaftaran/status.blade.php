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
                                    <input type="text" class="form-control" id="nama" placeholder="{{ $pendaftaran->nama }}" value="{{ $pendaftaran->nama }}" style="background-color: #E0E0E0;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodeArsip" class="col-md-4 col-form-label">Judul</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="judul" placeholder="{{ $pendaftaran->judul }}" value="{{ $pendaftaran->judul }}" style="background-color: #E0E0E0;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodeArsip" class="col-md-4 col-form-label">Jenis</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="jenis" placeholder="{{ $pendaftaran->jenis_permohonan }}" value="{{ $pendaftaran->jenis_permohonan }}" style="background-color: #E0E0E0;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lokasiArsip" class="col-md-4 col-form-label">Status</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="lokasiArsip" name="status" style="background-color: #E0E0E0;">
                                        <option value="1">Pendaftaran</option>
                                        <option value="2">Pemeriksaan Formalitas</option>
                                        <option value="3">Menunggu Tanggapan Formalitas</option>
                                        <option value="4">Masa Pengumuman</option>
                                        <option value="5">Menunggu Pembayaran Subtantif</option>
                                        <option value="6">Subtantif Tahap Awal</option>
                                        <option value="7">Subtantif Tahap Lanjut</option>
                                        <option value="8">Subtantif Tahap Akhir</option>
                                        <option value="9">Menunggu Tanggapan Subtantif</option>
                                        <option value="10">Selesai</option>
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