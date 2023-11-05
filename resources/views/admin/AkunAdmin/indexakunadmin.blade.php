@extends('layouts.adminapp')

@section('content')
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
                <span class="font-weight" style="font-size: 30px; color: white; margin-left: 10px;">Akun Admin</span>
                <button class="btn btn" style="font-size: 15px; border-radius: 20px;background-color:#DAA520;color:black">Tambah Akun</button>
            </div>
            
                    
                <div class="col-lg-14 mx-auto"> 
                    <div class="card rounded shadow border-2"> 
                        <div class="card-body p-2 bg-white rounded">
                                    <div class="table-responsive">
                                        <br>
                                        <table id="example" style="width: 100%" class="table table-striped table-bordered">
                                            <br>
                                            <thead style="background-color:black">
                                                <tr>
                                                  <th>Jabatan</th>
                                                  <th>Nama Pengguna</th>
                                                  <th>Nama</th>
                                                  <th>NO HP</th>
                                                  <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                  <td>Anggota</td>
                                                  <td>Ali Idrus</td>
                                                  <td>Ali</td>
                                                  <td>085377</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      
                                                </tr>
                                                <tr>
                                                  <td>Anggota</td>
                                                  <td>Ali Idrus</td>
                                                  <td>Ali</td>
                                                  <td>085377</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      
                                                </tr>
                                                <tr>
                                                  <td>Anggota</td>
                                                  <td>Ali Idrus</td>
                                                  <td>Ali</td>
                                                  <td>085377</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      
                                                </tr>
                                                <tr>
                                                  <td>Anggota</td>
                                                  <td>Ali Idrus</td>
                                                  <td>Ali</td>
                                                  <td>085377</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      
                                                </tr>
                                                <tr>
                                                  <td>Anggota</td>
                                                  <td>Ali Idrus</td>
                                                  <td>Ali</td>
                                                  <td>085377</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      
                                                </tr>
                                                <tr>
                                                  <td>Anggota</td>
                                                  <td>Ali Idrus</td>
                                                  <td>Ali</td>
                                                  <td>085377</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      
                                                </tr>
                                                <tr>
                                                  <td>Anggota</td>
                                                  <td>Ali Idrus</td>
                                                  <td>Ali</td>
                                                  <td>085377</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      
                                                </tr>
                                                <tr>
                                                  <td>Anggota</td>
                                                  <td>Ali Idrus</td>
                                                  <td>Ali</td>
                                                  <td>085377</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      
                                                </tr>
                                                <tr>
                                                  <td>Anggota</td>
                                                  <td>Ali Idrus</td>
                                                  <td>Ali</td>
                                                  <td>085377</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      
                                                </tr>
                                                <tr>
                                                  <td>Anggota</td>
                                                  <td>Ali Idrus</td>
                                                  <td>Ali</td>
                                                  <td>085377</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      
                                                </tr>
                                                <tr>
                                                  <td>Anggota</td>
                                                  <td>Ali Idrus</td>
                                                  <td>Ali</td>
                                                  <td>085377</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      
                                                </tr>
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


@endsection
