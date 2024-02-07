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
            <a href="/katalog"> <button  class="btn"><i class="fas fa-arrow-left" style="font-size: 20px; border-radius: 20px;color:white"></i></button> </a> 
            <span class="font-weight" style="font-size: 30px; color: white; margin-left: 10px;">Tambah Katalog</span>
        </div>

    <div class="row py-6">
        <div class="col-lg-12 mx-auto"> 
            <div class="card rounded shadow border-2"> 
                <div class="card-body p-5 bg-white rounded">

    
        

            <div class="row no-gutters row-bordered row-border-light" style="justify-content: center">
                <div class="col-md-9"><br>
                    <form method="POST" action="{{ route('katalog.store') }}" enctype="multipart/form-data">   
                        @csrf
                        <div class="form-group row">
                            <label for="Judul" class="col-md-4 col-form-label">Judul</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="judul" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="eissn" class="col-md-4 col-form-label">E-ISSN</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="eissn" name="eissn" placeholder="eissn" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="penulis1" class="col-md-4 col-form-label">Penulis 1</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="penulis1" name="penulis1" placeholder="Penulis1" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="penulis2" class="col-md-4 col-form-label">Penulis 2</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="penulis2" name="penulis2" placeholder="Penulis2" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="penulis3" class="col-md-4 col-form-label">Penulis 3</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="penulis3" name="penulis3" placeholder="Penulis3" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="publish" class="col-md-4 col-form-label">Tanggal Publish</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="publish" name="publish" placeholder="Publish" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="isi" class="col-md-4 col-form-label">Abstrak</label>
                            <div class="col-md-8">
                                <textarea id="isi" name="abstrak" style="background-color: #EBF1FA; width: 100%; height: 200px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="katakunci" class="col-md-4 col-form-label">Kata Kunci</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="katakunci" name="katakunci" placeholder="katakunci" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cover" class="col-md-4 col-form-label">cover</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="cover" name="cover" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="uploadSurat" class="col-md-4 col-form-label">Upload Katalog</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="uploadkatalog" name="file" style="background-color:#EBF1FA">
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
