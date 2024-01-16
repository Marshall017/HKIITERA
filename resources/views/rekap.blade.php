@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/rekap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.1/css/ionicons.min.css"> <!-- Include Ionicons CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  </head>
  <body>
    <div class="rekap-intelektual">
      <div class="overlap"><div class="text-wrapper">REKAP INTELEKTUAL ITERA</div></div>
      <div class="overlap-group">
        <div class="div">
          <div class="text-wrapper-2">358</div>
          <div class="text-wrapper-3">Rahasia Dagang</div>
        </div>
        <div class="overlap-2">
          <div class="text-wrapper-4">12</div>
          <div class="text-wrapper-5">Paten Sederhana</div>
        </div>
        <div class="overlap-3">
          <div class="text-wrapper-6">126</div>
          <div class="text-wrapper-7">Desain Industri</div>
        </div>
        <div class="overlap-4">
          <div class="text-wrapper-6">45</div>
          <div class="text-wrapper-7">Hak Cipta</div>
        </div>
        <div class="overlap-5">
          <div class="text-wrapper-8">42</div>
          <div class="text-wrapper-9">Merek Dagang</div>
        </div>
        <div class="overlap-6">
          <div class="text-wrapper-8">0</div>
          <div class="text-wrapper-9">Integrated Circuits</div>
        </div>
        <div class="overlap-7">
          <div class="text-wrapper-8">69</div>
          <div class="text-wrapper-9">Paten</div>
        </div>
        <div class="overlap-8">
          <div class="text-wrapper-8">5</div>
          <div class="text-wrapper-9">Indikasi Geografis</div>
        </div>
      </div>
      <div class="overlap-group-2">
        <div class="card-body p-2 bg-white rounded">
          <div class="table-responsive">
              <br>
              <table id="example" style="width: 100%" class="table table-striped table-bordered">
                  <br>
                  <thead style="background-color:black">
                      <tr>
                          <th>Nama</th>
                          <th>Judul</th>
                          <th>No.Pendaftaran</th>
                          <th>No.Registrasi</th>
                          <th>Prodi</th>
                          <th>Tahun</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>Informatika</td>
                        <td>2020</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>Informatika</td>
                        <td>2020</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>Informatika</td>
                        <td>2020</td>
                      </tr>
                      
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
