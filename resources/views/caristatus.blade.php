@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="css/pembayaran.css">
    <h1 style="text-align: center">Lacak Status PendaftaranAnda</h1><br>
    <br>
    <div class="contain" style="margin-left:150px;margin-right:150px;border-radius: 15px;">
        <div class="overlay-content">
            <form id="customerForm" method="POST" action="/statuspendaftaran">
                @csrf <!-- Tambahkan token CSRF -->
                <div class="form-group">
                    <label for="judul">Judul:</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: #DAA520; color:white">Lihat Status</button>
            </form>
            
            
            </div>
    </div>
    
    <br><br><br><br><br>
@endsection
