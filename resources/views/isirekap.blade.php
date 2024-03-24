@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <style>
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
        th, td {
          padding: 5px;
          text-align: left;
        }
        </style>
  </head>
  <body>
    
    <div class="overlap-group-2" >
        <div class="card-body p-2 bg-white rounded" >
        <div class="detail" style="margin-left: 20px;">
            <h2>Detail Intelektual:</h2>
            <table style="width:80%">
            <tr>
                <th>Nomor Pendaftaran:</th>
                <td>{{ $rekap->nomor_pendaftaran }}</td>
            </tr>
            <tr>
                <th>Nomor Publikasi:</th>
                <td>{{ $rekap->nomor_pendaftaran }}</td>
            </tr>
            <tr>
                <th>Jenis:</th>
                <td>{{ $rekap->jenis }}</td>
            </tr>
            <tr>
                <th>Judul:</th>
                <td>{{ $rekap->judul }}</td>
            </tr>
            <tr>
                <th>Inventor:</th>
                <td>{{ $rekap->inventor }}</td>
            </tr>
            <tr>
                <th>Pemegang:</th>
                <td>{{ $rekap->pemegang }}</td>
            </tr>
            <tr>
                <th>Prodi:</th>
                <td>-</td>
            </tr>
            </table> 
            <br>
            <h2>Sertifikat:</h2><br>
            <img width="750px" height="750px" src="{{ asset('assets/rekap/'.$rekap->sertif) }}" > 
         
         <div>
            <div> 
                <div> 
  </body>
</html>

<br><br>
@endsection
