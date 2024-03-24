@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="css/status.css">

<h1 style="text-align: center">Status Pendaftaran</h1>
@foreach ($pendaftaran as $pendaftaran)
<div class="div">
	<div class="div-2">
	  <div class="div-3"></div>
	  <div class="div-4">

      <div class="box-body" style="border: 2px solid rgb(255, 0, 0); padding: 15px;">
        <div class="row bs-wizard" style="border-bottom:0; padding-bottom: 50px;">
          @php
          $status = $pendaftaran->status; // Ambil status dari variabel $pendaftaran
          $tahapan = [
              'Pendaftaran Karya Intelektual',
              'Pemeriksaan Formalitas',
              'Menunggu Tanggapan Formalitas',
              'Masa Pengumuman',
              'Menunggu Pembayaran Subtantif',
              'Subtantif Tahap Awal',
              'Subtantif Tahap Lanjut',
              'Subtantif Tahap Akhir',
              'Menunggu Tanggapan Subtantif',
              'Selesai'
          ];
          @endphp
      
          @foreach ($tahapan as $index => $langkah)
          <div class="col-xs-3 bs-wizard-step
            {{ $status == $langkah ? 'active' : ($index <= array_search($status, $tahapan) ? 'complete' : 'disabled') }}">
            <div class="text-center bs-wizard-stepnum">{{ $index + 1 }}</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center">{{ $langkah }}</div>
          </div>
          @endforeach
        </div>
      
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="fa fa-info"></i>&nbsp;<span id="alertMessage"></span></h5>
        </div>
      </div>

      <script>
        // Fungsi untuk menampilkan alert sesuai dengan status yang sedang terjadi
        function showAlert(statusIndex) {
          var alertElement = document.querySelector('.alert');
          var alertMessage = '';
      
          // Ambil semua status point
          var statusPoints = document.querySelectorAll('.bs-wizard-step');
      
          // Cari status yang sedang aktif
          var activeIndex = -1;
          statusPoints.forEach(function(point, index) {
            if (point.classList.contains('active')) {
              activeIndex = index;
            }
          });
      
          switch (activeIndex) {
            case 0:
              alertMessage = 'Status Pendaftaran Karya Intelektual Anda berada pada tahap Pendaftaran Karya Intelektual.';
              break;
            case 1:
              alertMessage = 'Status Pendaftaran Karya Intelektual Anda berada pada tahap Pemeriksaan Formalitas.';
              break;
            case 2:
              alertMessage = 'Status Pendaftaran Karya Intelektual Anda berada pada tahap Menunggu Tanggapan Formalitas.';
              break;
            case 3:
              alertMessage = 'Status Pendaftaran Karya Intelektual Anda saat ini berada pada tahap Masa Pengumuman.';
              break;
            case 4:
              alertMessage = 'Status Pendaftaran Karya Intelektual Anda saat ini berada pada tahap Menunggu Pembayaran Subtantif.';
              break;
            case 5:
              alertMessage = 'Status Pendaftaran Karya Intelektual Anda saat ini berada pada tahap Subtantif Tahap Awal.';
              break;
            case 6:
              alertMessage = 'Status Pendaftaran Karya Intelektual Anda saat ini berada pada tahap Subtantif Tahap Lanjut.';
              break;
            case 7:
              alertMessage = 'Status Pendaftaran Karya Intelektual Anda saat ini berada pada tahap Subtantif Tahap Akhir.';
              break;
            case 8:
              alertMessage = 'Status Pendaftaran Karya Intelektual Anda saat ini berada pada tahap Menunggu Tanggapan Subtantif.';
              break;
            case 9:
              alertMessage = 'Selamat! Pendaftaran Karya Intelektual Anda telah selesai.';
              break;  
            default:
              alertMessage = 'Tidak ada status yang sedang aktif.';
              break;
          }
      
          // Ganti isi alert dengan pesan yang sesuai
          document.getElementById('alertMessage').textContent = alertMessage;
      
          // Tampilkan atau sembunyikan alert sesuai dengan statusIndex
          alertElement.style.display = activeIndex !== -1 ? 'block' : 'none';
        }
      
        // Panggil fungsi untuk menginisialisasi tampilan awal
        showAlert(); // Panggil tanpa parameter untuk mengambil status yang sedang aktif saat ini
      </script>
            

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="div-18" ></div>
</div>
<span class="span-5" style="border: 2px solid rgb(0, 0, 0); padding: 15px;">
  <div class="div-19">DATA PENDAFTAR</div> <br>
  <table style="width:80%">
    <tr>
      <th>Inventor</th>
      <td>: {{ $pendaftaran->nama }}</td>
    </tr>
    <tr>
      <th>Judul</th>
      <td>: {{ $pendaftaran->judul }}</td>
    </tr>
    <tr>
        <th>Jenis</th>
        <td>: {{ $pendaftaran->jenis_permohonan }}</td>
    </tr>
    <tr>
        <th>Prodi</th>
        <td>: {{ $pendaftaran->prodi }}</td>
    </tr>
    </table> 
</span>
@endforeach

<br><br><br><br><br>
@endsection
