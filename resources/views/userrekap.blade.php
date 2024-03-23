@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/rekap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.1/css/ionicons.min.css"> <!-- Include Ionicons CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  </head>
  <body>
    <div class="rekap-intelektual">
      <div class="overlap"><div class="text-wrapper">REKAP INTELEKTUAL ITERA</div></div><br><br><br><br><br><br><br>
      <div class="container py-4 text-center" style="background-color: #ffffff; border-radius: 15px; margin-left: 70px;max-width: 1300px;margin-top:-10px;">
        <div class="row justify-content-center">
            @foreach(['Rahasia Dagang', 'Desain Industri', 'Merek Dagang', 'Paten', 'Paten Sederhana', 'Hak Cipta', 'Integrated Circuits', 'Indikasi Geografis'] as $jenis)
                @php
                    $jenisCount = $jenisCounts->where('jenis', $jenis)->first();
                @endphp
                <div class="col-lg-3 col-6" style="color:white">
                    <div class="small-box custom-box 
                        @if($jenis == 'Rahasia Dagang')
                            bg-custom
                        @elseif($jenis == 'Desain Industri')
                            bg-custom
                        @elseif($jenis == 'Merek Dagang')
                            bg-custom
                        @elseif($jenis == 'Paten')
                            bg-custom
                        @elseif($jenis == 'Paten Sederhana')
                            bg-custom
                        @elseif($jenis == 'Hak Cipta')
                            bg-custom
                        @elseif($jenis == 'Integrated Circuits')
                            bg-custom
                        @elseif($jenis == 'Indikasi Geografis')
                            bg-custom
                        @endif" style="border-radius: 5px;height:90px;">
                        <div class="inner" style="margin: auto;">
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
                    </div><div class="row mt-4 justify-content-center">
                @endif
            @endforeach
        </div>
    </div>
    
      <div class="overlap-group-2" >
        <div class="card-body p-2 bg-white rounded" >
          <div class="table-responsive">
              <br>
            <table id="example" style="width: 99%;height:80%" class="table table-striped table-bordered">
                <thead style="background-color: black; color: white;">
                  <tr style="text-align: center">
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
                          <td>
                            <a href="{{ route('isirekap.show', $rekap->id) }}" class="btn btn-success"><i class="fas fa-eye"></i> Lihat</a>
                        </td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
          </div>

      </div>
    </div>
  </body>
  
          <!-- Sisipkan script untuk jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Sisipkan script untuk DataTables -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<!-- Sisipkan script untuk file JavaScript Anda -->
<script src="js/dashboard.js"></script>
</html>

<br><br>
@endsection
