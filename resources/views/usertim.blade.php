@extends('layouts.app')

@section('content')
<br>
<h1 style="text-align: center">TIM PUSAT KELOLA KEKAYAAN INTELEKTUAL</h1>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/tim.css" />
  </head>
  <body >
    <div class="tim-PKKI">
          @foreach ($tims as $tim)
          <div class="overlap-group">
            <div class="rectangle"></div>
            <p class="text-wrapper">{{ $tim->jabatan }}</p>
            <div class="div">{{ $tim->prodi }}</div>
            <div class="text-wrapper-2">{{ $tim->nama }}</div>
            
            <img class="fotol" src="{{ asset('assets/tim/'.$tim->file_foto) }}" />
            <div class="sosmedl">
                <!-- Tambahkan ikon media sosial di sini -->
                     <a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"
                    ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a class="btn btn-primary" style="background-color: #55acee;" href="#!" role="button"
                    ><i class="fab fa-twitter"></i
                    ></a>
                    <a class="btn btn-primary" style="background-color: #ac2bac;" href="#!" role="button"
                    ><i class="fab fa-instagram"></i
                    ></a>
                    <a class="btn btn-primary" style="background-color: #0082ca;" href="#!" role="button"
                    ><i class="fab fa-linkedin-in"></i
                    ></a>
            </div>
          </div>
          @endforeach
            
    </div>
  </body>
</html>



    <br><br><br>
@endsection
