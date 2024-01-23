@extends('layouts.adminapp')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/createberita.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>
    
    <div class="container py-5" style="background-color:#B80000; border-radius: 25px;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <span class="font-weight" style="font-size: 30px; color: white; margin-left: 10px;">Edit Berita</span>
        </div>

    <div class="row py-6">
        <div class="col-lg-12 mx-auto"> 
            <div class="card rounded shadow border-2"> 
                <div class="card-body p-5 bg-white rounded">

    
        

            <div class="row no-gutters row-bordered row-border-light" style="justify-content: center">
                <div class="col-md-9"><br>
                    <form method="POST" action="{{ route('berita.update', $berita->id) }}" enctype="multipart/form-data">   
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="namaSurat" class="col-md-4 col-form-label">Judul</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="{{ $berita->judul }}" value="{{ $berita->judul }}" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kategoriSurat" class="col-md-4 col-form-label">Sub Judul</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="subjudul" name="sub_judul" placeholder="{{ $berita->sub_judul }}" value="{{ $berita->sub_judul }}" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="perihal" class="col-md-4 col-form-label">Author</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="perihal" name="author" placeholder="{{ $berita->author }}" value="{{ $berita->author }}" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal" class="col-md-4 col-form-label">Tanggal Unggah</label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" id="tanggal" name="tanggal_unggah" placeholder="{{ $berita->tanggal_unggah }}" value="{{ $berita->tanggal_unggah }}"style="background-color: #E0E0E0;">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="isi" class="col-md-4 col-form-label">Isi Berita</label>
                            <div class="col-md-8">
                                <textarea id="isi" name="isi_berita" placeholder="{{ $berita->isi_berita }}" value="{{ $berita->isi_berita }}" style="background-color: #EBF1FA; width: 100%; height: 200px;"></textarea>
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="uploadSurat" class="col-md-4 col-form-label">Upload Gambar</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="uploadSurat" name="upload_gambar" style="background-color:#EBF1FA">
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
            </div>
        </div>
    </div>
       </div></div></div></div>
</body>
</html>


@endsection
