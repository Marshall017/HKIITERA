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
                <span class="font-weight" style="font-size: 30px; color: white; margin-left: 10px;">Logo</span>
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
                                                  <th>Logo</th>
                                                  <th>aksi</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              @foreach($logo as $logo)
                                                  <tr>
                                                      <td>{{ $logo->id }}</td>
                                                      <td>{{ $logo->logo }}</td>
                                                      <td>
                                                        <div class="button-group">
                                                            <a href="{{ route('logo.edit', $logo->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                            
                                                        </div>
                                                    </td>
<style>
  .button-group {
    display: flex;
    gap: 5px; /* Jarak antara tombol-tombol */
}

.button-group a,
.button-group button {
    flex: 1; /* Membuat tombol-tombol membagi ruang secara merata */
}

  </style>                                                    
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
