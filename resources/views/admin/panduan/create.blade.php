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
        <div style="display: flex;align-items: center;">
            <a href="/panduan"> <button  class="btn"><i class="fas fa-arrow-left" style="font-size: 20px; border-radius: 20px;color:white"></i></button> </a> 
            <span class="font-weight" style="font-size: 30px; color: white; margin-left: 10px;">Tambah Panduan</span>
        </div>

    <div class="row py-6">
        <div class="col-lg-12 mx-auto"> 
            <div class="card rounded shadow border-2"> 
                <div class="card-body p-5 bg-white rounded">

    
        

            <div class="row no-gutters row-bordered row-border-light" style="justify-content: center">
                <div class="col-md-9"><br>
                    <form method="POST" action="{{ route('panduan.store') }}" enctype="multipart/form-data">   
                        @csrf
                        <div class="form-group row">
                            <label for="perihal" class="col-md-4 col-form-label">Kategori</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="kategori" style="background-color:#EBF1FA">
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="isi" class="col-md-4 col-form-label">Text</label>
                            <div class="col-md-8">
                                <textarea id="textfile" name="textfile" style="background-color: #EBF1FA; width: 100%; height: 200px;"></textarea>
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="uploadSurat" class="col-md-4 col-form-label">Upload Gambar</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="uploadSurat" name="gambar" style="background-color:#EBF1FA">
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