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
                <a href="/berita/create" class="btn btn" style="font-size: 15px; border-radius: 20px; background-color: #DAA520; color: black">Tambah Berita</a>

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
                                                    <th>ID</th>
                                                    <th>Judul</th>
                                                    <th>Sub Judul</th>
                                                    <th>Author</th>
                                                    <th>Tanggal Terbit</th>
                                                    <th>Gambar</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach($berita as $berita)
                                                <tr>
                                                  <td>{{ $berita->id }}</td>
                                                  <td>{{ $berita->judul }}</td>
                                                  <td>{{ $berita->sub_judul }}</td>
                                                  <td>{{ $berita->author }}</td>
                                                  <td>{{ $berita->tanggal_unggah }}</td>
                                                  <td>{{ $berita->upload_gambar }}</td>
                                                  <td>
                                                    <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                    <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                    <form action="{{ route('berita.destroy', $berita->id) }}" method="post" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></button>
                                                    </form>
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
