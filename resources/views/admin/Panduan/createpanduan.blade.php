@extends('layouts.adminapp')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    {{-- <link rel="stylesheet" href="css/arsip.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>
    
    <div class="container py-5" style="background-color:#B80000; border-radius: 25px;">
        <div class="container py-6">
            <div style="display: flex; align-items: center;">
                <button class="btn " style="font-size: 20px; border-radius: 20px;color:white">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <span class="font" style="font-size: 30px;color: white">Tambah Panduan</span>
            </div>
    </div>
    <div class="row py-6">
        <div class="col-lg-12 mx-auto"> 
            <div class="card rounded shadow border-2"> 
                <div class="card-body p-5 bg-white rounded">
                    <form>   
                        <div class="form-group row">
                            <label for="namaSurat" class="col-md-4 col-form-label">Judul</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="judul" placeholder="Judul" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kategoriSurat" class="col-md-4 col-form-label">Sub Judul</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="subjudul" placeholder="Sub Judul" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="isi" class="col-md-4 col-form-label">Isi Berita</label>
                            <div class="col-md-8">
                                <textarea id="isi" name="isi" style="background-color: #EBF1FA; width: 100%; height: 200px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="isi" class="col-md-4 col-form-label">Daftar Biaya</label>
                            <div class="col-md-8">
                                <textarea id="isi" name="isi" style="background-color: #EBF1FA; width: 100%; height: 200px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary" style="background-color: #338BFD;color:white">Submit</button>
                            </div>
                        </div>
                    </form>
    
    </div>
       </div></div></div></div>
</body>
</html>


@endsection