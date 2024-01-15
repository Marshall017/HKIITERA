@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="css/pembayaran.css">
        <h1 style="text-align: center">Tagihan Pembayaran</h1><br>

<br>
            <div class="contain"style="margin-left:150px;margin-right:150px;border-radius: 15px;">
                <div class="overlay-content">
                        <div class="details">
                            <label>Nama Pemohon     : John Doe </label>
                            <label>Tanggal          : 2024-01-15</label>
                            <label>Kode             : INV123</label>
                            <label>Jenis Permohonan : Paten </label>     
                        </div>
                
                        <div class="details">
                            <h6>Rincian Tagihan</h6>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Biaya</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Produk A</td>
                                        <td>Deskripsi Produk A</td>
                                        <td>$50.00</td>
                                        <td>$50.00</td>
                                    </tr>
                                    <tr>
                                        <td>Produk B</td>
                                        <td>Deskripsi Produk B</td>
                                        <td>$30.00</td>
                                        <td>$30.00</td>
                                    </tr>
                                    <!-- Tambahkan baris sesuai dengan rincian tagihan -->
                                </tbody>
                            </table>
                            <br>
                            <form>   
                                <div class="form-group row">
                                    <label for="pembayaran" class="col-md-4 col-form-label">Upload Bukti Pembayaran</label>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control" id="pembayaran" name="pembayaran" style="background-color:#EBF1FA">
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-primary" style="background-color: #DAA520;color:white">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    
                </div>
            </div>
<br><br><br><br><br>
@endsection
