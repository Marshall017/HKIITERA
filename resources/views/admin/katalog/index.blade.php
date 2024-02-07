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
                <span class="font-weight" style="font-size: 30px; color: white; margin-left: 10px;">Katalog</span>
                <a href="/katalog/create" class="btn btn" style="font-size: 15px; border-radius: 20px; background-color: #DAA520; color: black">Tambah Katalog</a>
            </div>
            
                    
                <div class="col-lg-14 mx-auto"> 
                    <div class="card rounded shadow border-2"> 
                        <div class="card-body p-2 bg-white rounded">
                                    <div class="table-responsive">
                                        <br>
                                        <table id="example" style="width: 100%" class="table table-striped table-bordered">
                                            <thead style="background-color:black">
                                              <tr>
                                                  <th>ID</th>
                                                  <th>judul</th>
                                                  <th>E-ISSN</th>
                                                  <th>File</th>
                                                  <th>Aksi</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              @foreach($katalog as $katalog)
                                                  <tr>
                                                      <td>{{ $katalog->id }}</td>
                                                      <td>{{ $katalog->judul }}</td>
                                                      <td>{{ $katalog->eissn }}</td>
                                                      <td>{{ $katalog->file }}</td>
                                                     
                                                      <td style="display: flex; justify-content: space-between;">
                                                        <a href="{{ route('katalog.edit',$katalog->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                    
                                                        <form action="{{ route('katalog.destroy', $katalog->id) }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus katalog ini?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                        </form>
                                                    
                                                        <a href="{{ route('katalog.download', $katalog->id) }}" class="btn btn-success"><i class="fas fa-download"></i></a>
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


@endsection
