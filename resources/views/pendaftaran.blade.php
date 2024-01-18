@extends('layouts.app')

@section('content')

        <h1 style="text-align: center">Form Pendaftaran</h1><br>

            <div class="contain"style="margin-left:150px;margin-right:150px;border-radius: 10px;"> <br> 
            <h6 style="margin-left: 20px">Formulir ini merupakan media pengajuan permohonan pendaftaran paten dan paten sederhana bagi civitas akademika Institut Teknologi Sumatera. 
                Silahkan lengkapi seluruh bagian pada formulir ini. Adapun dokumen dan ketentuan lainnya sehubungan permohonan pendaftaran dapat dilihat pada menu Dokumen</h6> <br>  
            </div>
<br>
            <div class="contain"style="margin-left:150px;margin-right:150px;border-radius: 15px;">
                <div class="overlay-content">
                    <form>   
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label">Email</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="email" placeholder="Email" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenisPermohonan" class="col-md-4 col-form-label">Jenis Permohonan</label>
                            <div class="col-md-8">
                                <select class="form-control" id="jenisPermohonan" name="jenisPermohonan" style="background-color: #E0E0E0;">
                                    <option value="LuarInstansi">Paten</option>
                                    <option value="Karyawan">Paten Sederhana</option>
                                    <option value="Karyawan">Hak Cipta</option>
                                    <option value="Karyawan">Merek Dagang</option>
                                    <option value="Karyawan">Desain Industri</option>
                                    <option value="Karyawan">Rahasia Dagang</option>
                                    <option value="Karyawan">Integrated Circuits</option>
                                    <option value="Karyawan">Indikasi Geografis</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namainventor" class="col-md-4 col-form-label">Nama Inventor</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="namainventor" placeholder="Nama Inventor" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nohp" class="col-md-4 col-form-label">No Hp/Wa</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nohp" placeholder="No Hp/Wa" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prodi" class="col-md-4 col-form-label">Program Studi</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="prodi" placeholder="Program Studi" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jurursan" class="col-md-4 col-form-label">Jurusan</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="jurusan" placeholder="Jurusan" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="judul" class="col-md-4 col-form-label">Judul Invensi</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="judul" placeholder="Judul Invensi" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label">Deskripsi Paten (format word)</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="deskripsi" name="deskripsi" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label">Deskripsi Paten (format pdf)</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="deskripsi" name="deskripsi" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="abstrak" class="col-md-4 col-form-label">Abstrak (format word) *maksimal 200 kata</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="abstrak" name="abstrak" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="abstrak" class="col-md-4 col-form-label">Abstrak (format pdf) *maksimal 200 kata</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="abstrak" name="abstrak" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="klaim" class="col-md-4 col-form-label">Klaim (format pdf)</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="klaim" name="klaim" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gambar" class="col-md-4 col-form-label">Gambar invensi (format pdf) *Gambar harus hitam putih, tidak boleh ada TULISAN, hanya boleh legenda(Gambar 1, 2, dst...) dan keterangan gambar dengan poin2 (a, b, c...). 
                                Kecuali gambar dalam bentuk diagram alir, boleh terdapat tulisan.</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="gambar" name="gambar" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="formpaten" class="col-md-4 col-form-label">Formulir Permohonan Paten (format pdf) *sudah di ttd kepala LP3M</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="formpaten" name="formpaten" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="formsubtan" class="col-md-4 col-form-label">Formulir Permohonan Subtantif Paten (format pdf) *sudah di ttd kepala LP3M</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="formsubtan" name="formsubtan" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pengalihanhak" class="col-md-4 col-form-label">Surat Pengalihan Hak Kepada ITERA(format pdf) *sudah di ttd kepala LP3M dan Inventor serta 
                                materai terutama pada sisi inventor</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="pengalihanhak" name="pengalihanhak" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pengalihanhak" class="col-md-4 col-form-label">Surat Pengalihan Hak Kepada ITERA(format word) *sudah di ttd kepala LP3M dan Inventor serta 
                                materai terutama pada sisi inventor</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="pengalihanhak" name="pengalihanhak" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kepemilikan" class="col-md-4 col-form-label">Surat Pernyataan Kepemilikan Invensi (format pdf) *sudah di beri materai dan di ttd</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="kepemilikan" name="kepemilikan" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kepemilikan" class="col-md-4 col-form-label">Surat Pernyataan Kepemilikan Invensi (format word) *sudah di beri materai dan di ttd</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="kepemilikan" name="kepemilikan" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ktp" class="col-md-4 col-form-label">Foto KTP Hak Cipta master (format word)</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="ktp" name="ktp" style="background-color:#EBF1FA">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary" style="background-color: #DAA520;color:white">Submit</button>
                            </div>
                        </div>
                    </form>

                    <style>
                        .form-group {
                            margin-bottom: 15px;
                        }
                
                        .col-form-label {
                            text-align: left;
                        }
                    </style>
                </div>
            </div>
<br><br><br><br><br>
@endsection
