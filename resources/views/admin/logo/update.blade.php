@extends('layouts.adminapp')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    {{-- <link rel="stylesheet" href="css/arsip.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>
    
    <div class="container py-5" style="background-color:#B80000; border-radius: 25px;">
        <div class="container py-6">
            <div style="display: flex; align-items: center;">
                <a href="/logo"> <button  class="btn"><i class="fas fa-arrow-left" style="font-size: 20px; border-radius: 20px;color:white"></i></button> </a>
                <span class="font" style="font-size: 20px;color: white">Edit Logo</span>
            </div>
    </div>
    <div class="row py-6">
        <div class="col-lg-12 mx-auto"> 
            <div class="card rounded shadow border-2"> 
                <div class="card-body p-5 bg-white rounded">

    <div class="container light-style flex-grow-1 container-p-y">
        <div class="card overflow-hidden"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
            <div class="card-header" style="background-color: #DAA520;color:white;text-align:center;border-radius:10px;">
                <h4>Edit Logo</h4>
            </div>
            
            <div class="row no-gutters row-bordered row-border-light" style="justify-content: center">
                <div class="col-md-9">
                    <div class="tab-pane fade active show" id="account-general">

                        <form method="POST" action="{{ route('logo.update', $logo->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        
                            <!-- Bagian upload gambar -->
                            <div class="card-body media align-items-center">
                                @if($logo->logo)
                                    <img src="{{ asset('assets/logo/' . $logo->logo) }}" style="width:20%" class="rounded-circle">
                                @else
                                    <img src="{{ asset('img/profil.png') }}" style="width:20%" class="rounded-circle">
                                @endif
                                <div class="media-body ml-4">
                                    <div class="form-group">
                                        <label for="uploaddokumen" class="btn btn-outline-primary">
                                            Upload Logo
                                            <input type="file" class="d-none" id="uploaddokumen" name="logo">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                                <!-- Tombol submit -->
                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                    <button type="submit" class="btn btn-default" style="background-color: blue;color:white">Save</button>
                                </div>
                            </div>

                            
                        </div>
                    </div>

                    <br>
                </div>

        </div>
        </div>
    </div>
       </div></div></div></div>
</body>
</html>


@endsection