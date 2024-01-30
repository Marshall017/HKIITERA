@extends('layouts.app')

@section('content')

        <h1 style="text-align: center">Unduh Katalog</h1><br>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.1/css/ionicons.min.css"> <!-- Include Ionicons CSS -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
            <link rel="stylesheet" href="css/berita.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        </head>
        <body>
        
            <div class="container py-5" style="background-color:#B80000; border-radius: 25px;"> 
                <div class="container py-6">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span class="font-weight" style="font-size: 30px; color: white; margin-left: 10px;">Katalog</span>
            
                    </div>    
                        <div class="col-lg-14 mx-auto"> 
                            <div class="card rounded shadow border-2"> 
                                <div class="card-body p-2 bg-white rounded">
                                            <div class="table-responsive">
                                                <br>
                                                <table id="example" style="width: 100%" class="table table-striped table-bordered">
                                                    <br><br>
                                                    <thead style="background-color:black">
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Nama</th>
                                                            <th>Jenis</th>
                                                            <th>Kategori</th>
                                                            <th>File</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($katalog as $katalog)
                                                            <tr>
                                                                <td>{{ $katalog->id }}</td>
                                                                <td>{{ $katalog->nama }}</td>
                                                                <td>{{ $katalog->jenis }}</td>
                                                                <td>{{ $katalog->kategori }}</td>
                                                                <td>{{ $katalog->file }}</td>
                                                               
                                                              <td>
                                                                  <a href="{{ route('userkatalog.download', $katalog->id) }}" ><button class="btn btn-success"><i class="fas fa-download"></i></button></a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        
        <!-- Sisipkan script untuk jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <!-- Sisipkan script untuk DataTables -->
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <!-- Sisipkan script untuk file JavaScript Anda -->
        <script src="js/berita.js"></script>
        </body>
        </html>
<br><br><br><br><br>
@endsection
