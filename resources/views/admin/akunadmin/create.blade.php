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
                <button class="btn " style="font-size: 20px; border-radius: 20px;color:white">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <span class="font" style="font-size: 30px;color: white">Tambah Akun</span>
            </div>
    </div>
    <div class="row py-6">
        <div class="col-lg-12 mx-auto"> 
            <div class="card rounded shadow border-2"> 
                <div class="card-body p-5 bg-white rounded">

    <div class="container light-style flex-grow-1 container-p-y">
        <div class="card overflow-hidden"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
            <div class="card-header" style="background-color: #DAA520;color:white;text-align:center;border-radius:10px;">
                <h4>Tambah Akun Admin</h4>
            </div>
            <div class="row no-gutters row-bordered row-border-light" style="justify-content: center">
                <div class="col-md-9">
                    <div class="tab-pane fade active show" id="account-general">
                        <hr class="border-light m-0">
                        <form method="POST" action="{{ route('akunadmin.store') }}" enctype="multipart/form-data">   
                            @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control mb-1" name="name" placeholder="Nama" style="background-color: #CCD9EC">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control mb-1" name="email" placeholder="Email" style="background-color: #CCD9EC">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="text" class="form-control" name="password" placeholder="Password" style="background-color: #CCD9EC">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Role</label>
                                <select class="form-control" name="role" style="background-color: #CCD9EC">
                                    <option value="2">Role 1</option>
                                </select>
                            </div>
                            
                            <div class="text-center mt-3" >
                                <button type="button" class="btn btn-outline-secondary">Cancel</button>
                                <button type="submit" class="btn btn-default" style="background-color: blue;color:white">Save</button>
                            </div>
                            
                            </div>
                        </form>
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