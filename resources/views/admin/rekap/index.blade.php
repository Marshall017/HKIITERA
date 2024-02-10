@extends('layouts.adminapp')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.1/css/ionicons.min.css"> <!-- Include Ionicons CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container py-5" style="background-color: #F5F5F5; border-radius: 25px; margin-bottom: 10px;">
        <div class="row">
            @foreach(['Rahasia Dagang', 'Desain Industri', 'Merek Dagang', 'Paten', 'Paten Sederhana', 'Hak Cipta', 'Integrated Circuits', 'Indikasi Geografis'] as $jenis)
                @php
                    $jenisCount = $jenisCounts->where('jenis', $jenis)->first();
                @endphp
                <div class="col-lg-3 col-6">
                    <div class="small-box custom-box 
                        @if($jenis == 'Rahasia Dagang')
                            bg-info
                        @elseif($jenis == 'Desain Industri')
                            bg-success
                        @elseif($jenis == 'Merek Dagang')
                            bg-warning
                        @elseif($jenis == 'Paten')
                            bg-danger
                        @elseif($jenis == 'Paten Sederhana')
                            bg-info
                        @elseif($jenis == 'Hak Cipta')
                            bg-success
                        @elseif($jenis == 'Integrated Circuits')
                            bg-warning
                        @elseif($jenis == 'Indikasi Geografis')
                            bg-danger
                        @endif">
                        <div class="inner">
                            <h3>{{ $jenisCount ? $jenisCount->total : 0 }}</h3>
                            <p>{{ $jenis }}</p>
                        </div>
                        <div class="icon">
                            @if($jenis == 'Rahasia Dagang')
                                <i class="ion ion-bag"></i>
                            @elseif($jenis == 'Desain Industri')
                                <i class="ion ion-stats-bars"></i>
                            @elseif($jenis == 'Merek Dagang')
                                <i class="ion ion-person-add"></i>
                            @elseif($jenis == 'Paten')
                                <i class="ion ion-pie-graph"></i>
                            @elseif($jenis == 'Paten Sederhana')
                                <i class="ion ion-bag"></i>
                            @elseif($jenis == 'Hak Cipta')
                                <i class="ion ion-stats-bars"></i>
                            @elseif($jenis == 'Integrated Circuits')
                                <i class="ion ion-person-add"></i>
                            @elseif($jenis == 'Indikasi Geografis')
                                <i class="ion ion-pie-graph"></i>
                            @endif
                        </div>
                    </div>
                </div>
                @if($loop->iteration % 4 == 0)
                    </div><div class="row mt-4">
                @endif
            @endforeach
        </div>
    </div>
    
    




    <div class="container py-5" style="background-color:#B80000; border-radius: 25px;"> 
        <div class="container py-6">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <span class="font-weight" style="font-size: 30px; color: white; margin-left: 10px;">Rekap</span>
                <a href="/rekap/create" class="btn btn" style="font-size: 15px; border-radius: 20px; background-color: #DAA520; color: black">Tambah Rekap</a>
            </div>


                <div class="col-lg-14 mx-auto"> 
                    <div class="card rounded shadow border-2"> 
                        <div class="card-body p-2 bg-white rounded">
                                    <div class="table-responsive">
                                        <br>
                                        <table id="example" style="width: 100%" class="table table-striped table-bordered">
                                            <thead style="background-color:black">
                                              <tr>
                                                  <th>Nomor Pendaftaran</th>
                                                  <th>Jenis</th>
                                                  <th>Judul</th>
                                                  <th>Pemegang</th>
                                                  <th>Inventor</th>
                                                  <th>Aksi</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              @foreach($rekap as $rekap)
                                                  <tr>
                                                      <td>{{ $rekap->nomor_pendaftaran }}</td>
                                                      <td>{{ $rekap->jenis }}</td>
                                                      <td>{{ $rekap->judul }}</td>
                                                      <td>{{ $rekap->pemegang }}</td>
                                                      <td>{{ $rekap->inventor }}</td>
                                                     
                                                      <td style="display: flex; justify-content: space-between;">
                                                        <a href="{{ route('rekap.edit',$rekap->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                    
                                                        <form action="{{ route('rekap.destroy', $rekap->id) }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus rekap ini?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
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
<script src="js/dashboard.js"></script>
</body>
</html>


@endsection
