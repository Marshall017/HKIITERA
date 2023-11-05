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
                <span class="font-weight" style="font-size: 30px; color: white; margin-left: 10px;">Berita</span>
                <button class="btn btn" style="font-size: 15px; border-radius: 20px;background-color:#DAA520;color:black">Tambah Berita</button>
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
                                                    <th>Judul</th>
                                                    <th>Author</th>
                                                    <th>Tanggal Terbit</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                  <td>Tiger Nixon</td>
                                                  <td>System Architect</td>
                                                  <td>21/02/2014</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                                                </tr>
                                                <tr>
                                                  <td>Garrett Winters</td>
                                                  <td>Accountant</td>
                                                  <td>21/02/2014</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                                                </tr>
                                                <tr>
                                                  <td>Ashton Cox</td>
                                                  <td>Junior Technical Author</td>
                                                  <td>21/02/2014</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                                                </tr>
                                                <tr>
                                                  <td>Cedric Kelly</td>
                                                  <td>Senior Javascript Developer</td>
                                                  <td>21/02/2014</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                                                </tr>
                                                <tr>
                                                  <td>Airi Satou</td>
                                                  <td>Accountant</td>
                                                  <td>21/02/2014</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                                                </tr>
                                                <tr>
                                                  <td>Brielle Williamson</td>
                                                  <td>Integration Specialist</td>
                                                  <td>21/02/2014</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                                                </tr>
                                                <tr>
                                                  <td>Herrod Chandler</td>
                                                  <td>Sales Assistant</td>
                                                  <td>21/02/2014</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                                                </tr>
                                                <tr>
                                                  <td>Rhona Davidson</td>
                                                  <td>Integration Specialist</td>
                                                  <td>21/02/2014</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                                                </tr>
                                                <tr>
                                                  <td>Colleen Hurst</td>
                                                  <td>Javascript Developer</td>
                                                  <td>21/02/2014</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                                                </tr>
                                                <tr>
                                                  <td>Sonya Frost</td>
                                                  <td>Software Engineer</td>
                                                  <td>21/02/2014</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
                                                </tr>
                                                <tr>
                                                  <td>Sonyi</td>
                                                  <td>Software Engineer</td>
                                                  <td>21/02/2014</td>
                                                  <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                      <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                      <button class="btn btn-success"><i class="fas fa-download"></i></button></td>
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