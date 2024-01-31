@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="css/pembayaran.css">
    <h1 style="text-align: center">Tagihan Pembayaran</h1><br>

    <br>
    <div class="contain" style="margin-left:150px;margin-right:150px;border-radius: 15px;">
        <div class="overlay-content">
            <!-- Formulir informasi pelanggan -->
            <h6>Informasi Pelanggan</h6><br>
            <form id="customerForm" style="text-align: left">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="nomor_hp">Nomor HP:</label>
                    <input type="text" class="form-control" id="nomor_hp" name="nomor_hp">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori:</label>
                    <select class="form-control" id="kategori" name="kategori">
                        <option value="pilihkategori">Pilih Kategori</option>
                        <option value="hak_cipta">Hak Cipta</option>
                        <option value="paten_sederhana">Paten Sederhana</option>
                        <option value="paten">Paten</option>
                        <option value="merk_dagang">Merk Dagang</option>
                        <option value="desain_industri">Desain Industri</option>
                        <option value="rahasia_dagang">Rahasia Dagang</option>
                    </select>
                </div>
            </form>
<br><br>
            <div class="details">
                <h6>Rincian Tagihan</h6>
                <table>
                    <thead>
                    <tr>
                        <th>Biaya</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td id="biaya">Rp 0</td>
                        <td id="total">Rp 0</td>
                    </tr>
                    </tbody>
                </table>
                <br>

                <div class="form-group row">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <!-- Tombol Bayar Sekarang -->
                        <button type="button" id="bayarSekarang" class="btn btn-primary" style="background-color: #DAA520; color:white">Bayar Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Skrip untuk mengarahkan ke halaman pembayaran Midtrans saat tombol ditekan -->
    <script>
        document.getElementById('kategori').addEventListener('change', function() {
            updateHarga();
        });

        document.getElementById('bayarSekarang').addEventListener('click', function() {
            // Mendapatkan nilai kategori yang dipilih
            var kategori = document.getElementById('kategori').value;

            // Mendapatkan harga berdasarkan kategori
            var harga;

            switch (kategori) {
                case 'hak_cipta':
                    harga = 500000;
                    break;
                case 'paten_sederhana':
                    harga = 1250000;
                    break;
                case 'paten':
                    harga = 4500000;
                    break;
                case 'merk_dagang':
                    harga = 600000;
                    break;
                case 'desain_industri':
                    harga = 350000;
                    break;
                case 'rahasia_dagang':
                    harga = 500000;
                    break;
                default:
                    harga = 0;
            }

            // Mendapatkan informasi pelanggan
            var nama = document.getElementById('nama').value;
            var nomor_hp = document.getElementById('nomor_hp').value;
            var email = document.getElementById('email').value;

            // Redirect ke halaman pembayaran dengan menyertakan parameter harga dan informasi pelanggan
            window.location.href = '/create-payment?harga=' + harga + '&nama=' + nama + '&nomor_hp=' + nomor_hp + '&email=' + email;
        });

        function updateHarga() {
        // Mendapatkan nilai kategori yang dipilih
        var kategori = document.getElementById('kategori').value;

        // Mendapatkan harga berdasarkan kategori
        var harga;

        switch (kategori) {
            case 'hak_cipta':
                harga = 500000;
                break;
            case 'paten_sederhana':
                harga = 1250000;
                break;
            case 'paten':
                harga = 4500000;
                break;
            case 'merk_dagang':
                harga = 600000;
                break;
            case 'desain_industri':
                harga = 350000;
                break;
            case 'rahasia_dagang':
                harga = 500000;
                break;
            default:
                harga = 0;
        }

        // Update tampilan harga individu di dalam tabel atau di mana pun yang Anda inginkan
        document.getElementById('biaya').innerText = 'Rp ' + formatRupiah(harga);

        // Update total harga sesuai dengan kategori yang dipilih pada blade
        document.getElementById('total').innerText = 'Rp ' + formatRupiah(harga);
    }

    // Fungsi untuk memformat angka menjadi format mata uang Rupiah
    function formatRupiah(angka) {
        var number_string = angka.toString().replace(/[^,\d]/g, ''),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        return rupiah;
    }
    </script>

    <br><br><br><br><br>
@endsection
