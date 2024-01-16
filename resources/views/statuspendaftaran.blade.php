@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="css/status.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <h1 style="text-align: center">Status Pendaftaran</h1>
        <div class="div">
                <div class="div-2">
                  <div class="div-3"></div>
                  <div class="div-4">

  <div class="status-container">
    <div class="status-line">
        <div class="status-point " style="left: 0;"></div>
        <div class="status-point completed" style="left: 33.33%;"></div>
        <div class="status-point" style="left: 66.66%;"></div>
        <div class="status-point" style="left: 100%;"></div>
    </div>
   
</div>

<div class="box-body">
    <div class="row bs-wizard" style="border-bottom: 0; padding-bottom: 50px;">
        <div class="col-xs-3 bs-wizard-step completed">
            <div class="bs-wizard-info text-center">Pendaftaran Karya Intelektual</div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step completed">
            <div class="bs-wizard-info text-center">Pembayaran</div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step current">
            <div class="bs-wizard-info text-center">Proses Oleh DJKI</div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step disabled">
            <div class="bs-wizard-info text-center"> Selesai</div>
        </div>
    </div>

    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    </div>
</div>

<script > 
  
  // Fungsi untuk menangani perubahan status point
  function updateStatusPoint(statusIndex) {
    // Ambil semua status point
    var statusPoints = document.querySelectorAll('.status-point');

    // Hapus kelas 'completed' dari semua status point
    statusPoints.forEach(function(point) {
      point.classList.remove('completed');
    });

    // Tambahkan kelas 'completed' pada status point yang sesuai
    statusPoints[statusIndex].classList.add('completed');

    // Tampilkan alert sesuai dengan status yang sedang terjadi
    showAlert(statusIndex);
  }

  // Fungsi untuk menampilkan alert sesuai dengan status yang sedang terjadi
  function showAlert(statusIndex) {
    var alertElement = document.querySelector('.alert');
    var alertMessage = '';
    
    switch (statusIndex) {
      case 0:
        alertMessage = 'Status Pendaftaran kekayaan Intelektual anda saat ini masih berada pada tahap Pendaftaran Karya Intelektual';
        break;
      case 1:
        alertMessage = 'Status Pendaftaran kekayaan Intelektual anda saat ini masih berada pada tahap Pembayaran';
        break;
      case 2:
        alertMessage = 'Status Pendaftaran kekayaan Intelektual anda saat ini sedang dalam proses oleh DJKI';
        break;
      case 3:
        alertMessage = 'Selamat! Pendaftaran kekayaan Intelektual anda telah selesai';
        break;
    }

    // Ganti isi alert dengan pesan yang sesuai
    alertElement.innerHTML = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h5><i class="fa fa-info"></i>&nbsp;' + alertMessage + '</h5>';

    // Tampilkan atau sembunyikan alert sesuai dengan statusIndex
    if (statusIndex === 1) {
      alertElement.style.display = 'block';
    } else {
      alertElement.style.display = 'none';
    }
  }

  // Panggil fungsi untuk menginisialisasi tampilan awal
  updateStatusPoint(1); // Anda dapat mengganti nilai ini sesuai dengan status awal


</script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





                    <div class="div-18"></div>
                  </div>
                  <span class="span-5">
                    <div class="div-19">DATA PENDAFTAR</div>
                    <div class="div-20"></div>
                    <span class="span-6">
                      <div class="div-21">Nama Inventor</div>
                      <div class="div-25">Haykal S.pd</div>
                    </span>
                    <div class="div-23"></div>
                    <span class="span-7">
                      <div class="div-24">Judul Invensi</div>
                      <div class="div-25">Jurnal</div>
                    </span>
                    <div class="div-26"></div>
                    <span class="span-8">
                      <div class="div-27">Jenis Permohonan</div>
                      <div class="div-28">Paten</div>
                    </span>
                    <div class="div-29"></div>
                    <div class="div-30">Unduh Dokumen</div>
                  </span>
                </div>
              </div>
              
<br><br><br><br><br>
@endsection
