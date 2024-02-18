@extends('layouts.app')

@section('content')

<h1 style="text-align: center">Form Pendaftaran</h1><br>

<div class="contain" style="margin-left:150px;margin-right:150px;border-radius: 10px;"> <br> 
    <h6 style="margin-left: 20px">Formulir ini merupakan media pengajuan permohonan pendaftaran paten dan paten sederhana bagi civitas akademika Institut Teknologi Sumatera. 
        Silahkan lengkapi seluruh bagian pada formulir ini. Adapun dokumen dan ketentuan lainnya sehubungan permohonan pendaftaran dapat dilihat pada menu Dokumen</h6> <br>  
</div>
<br>
<div class="contain" style="margin-left:150px;margin-right:150px;border-radius: 15px;">
    <div class="overlay-content">
        <form method="POST" action="{{ route('pendaftaran.store') }}" enctype="multipart/form-data" id="pendaftaranForm">   
            @csrf  
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label">Email</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" style="background-color:#EBF1FA">
                </div>
            </div>
            <div class="form-group row">
                <label for="jenisPermohonan" class="col-md-4 col-form-label">Jenis Permohonan</label>
                <div class="col-md-8">
                    <select class="form-control" id="jenisPermohonan" name="jenis_permohonan" style="background-color: #E0E0E0;" onchange="showForm()">
                        <option value="Paten">Paten</option>
                        <option value="Paten Sederhana">Paten Sederhana</option>
                        <option value="Hak Cipta">Hak Cipta</option>
                        <option value="Merek Dagang">Merek Dagang</option>
                        <option value="Desain Industri">Desain Industri</option>
                        <option value="Rahasia Dagang">Rahasia Dagang</option>
                        <option value="Integrated Circuits">Integrated Circuits</option>
                        <option value="Indikasi Geografis">Indikasi Geografis</option>
                    </select>
                </div>
            </div>
            <div id="form-paten">
                    <div class="form-group row">
                        <label for="namainventor" class="col-md-4 col-form-label">Nama Inventor</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="namainventor" name="nama" placeholder="Nama Inventor" style="background-color:#EBF1FA">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nohp" class="col-md-4 col-form-label">No Hp/Wa</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="nohp" name="no_hp" placeholder="No Hp/Wa" style="background-color:#EBF1FA">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="prodi" class="col-md-4 col-form-label">Program Studi</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Program Studi" style="background-color:#EBF1FA">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jurursan" class="col-md-4 col-form-label">Jurusan</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan" style="background-color:#EBF1FA">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="judul" class="col-md-4 col-form-label">Judul Invensi</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Invensi" style="background-color:#EBF1FA">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-md-4 col-form-label">Deskripsi Paten (format word)</label>
                        <div class="col-md-8">
                            <input type="file" class="form-control" id="deskripsi" name="deskripsi_paten_word" style="background-color:#EBF1FA" accept=".doc, .docx" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-md-4 col-form-label">Deskripsi Paten (format pdf)</label>
                        <div class="col-md-8">
                            <input type="file" class="form-control" id="deskripsi" name="deskripsi_paten_pdf" style="background-color:#EBF1FA" accept=".pdf" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="abstrak" class="col-md-4 col-form-label">Abstrak (format word) *maksimal 200 kata</label>
                        <div class="col-md-8">
                            <input type="file" class="form-control" id="abstrak" name="abstrak_word" style="background-color:#EBF1FA" accept=".doc, .docx" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="abstrak" class="col-md-4 col-form-label">Abstrak (format pdf) *maksimal 200 kata</label>
                        <div class="col-md-8">
                            <input type="file" class="form-control" id="abstrak" name="abstrak_pdf" style="background-color:#EBF1FA" accept=".pdf" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="klaim" class="col-md-4 col-form-label">Klaim (format pdf)</label>
                        <div class="col-md-8">
                            <input type="file" class="form-control" id="klaim" name="klaim_pdf" style="background-color:#EBF1FA" accept=".pdf" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gambar" class="col-md-4 col-form-label">Gambar invensi (format pdf) *Gambar harus hitam putih, tidak boleh ada TULISAN, hanya boleh legenda(Gambar 1, 2, dst...) dan keterangan gambar dengan poin2 (a, b, c...). 
                            Kecuali gambar dalam bentuk diagram alir, boleh terdapat tulisan.</label>
                        <div class="col-md-8">
                            <input type="file" class="form-control" id="gambar" name="gambar_invensi_pdf" style="background-color:#EBF1FA" accept=".pdf" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="formpaten" class="col-md-4 col-form-label">Formulir Permohonan Paten (format pdf) *sudah di ttd kepala LP3M</label>
                        <div class="col-md-8">
                            <input type="file" class="form-control" id="formpaten" name="formulir_permohonan_paten_pdf" style="background-color:#EBF1FA" accept=".pdf" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="formsubtan" class="col-md-4 col-form-label">Formulir Permohonan Subtantif Paten (format pdf) *sudah di ttd kepala LP3M</label>
                        <div class="col-md-8">
                            <input type="file" class="form-control" id="formsubtan" name="formulir_permohonan_substantif_paten_pdf" style="background-color:#EBF1FA" accept=".pdf" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pengalihanhak" class="col-md-4 col-form-label">Surat Pengalihan Hak Kepada ITERA(format pdf) *sudah di ttd kepala LP3M dan Inventor serta 
                            materai terutama pada sisi inventor</label>
                        <div class="col-md-8">
                            <input type="file" class="form-control" id="pengalihanhak" name="surat_pengalihan_hak_itera_pdf" style="background-color:#EBF1FA" accept=".pdf" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pengalihanhak" class="col-md-4 col-form-label">Surat Pengalihan Hak Kepada ITERA(format word) *sudah di ttd kepala LP3M dan Inventor serta 
                            materai terutama pada sisi inventor</label>
                        <div class="col-md-8">
                            <input type="file" class="form-control" id="pengalihanhak" name="surat_pengalihan_hak_itera_word" style="background-color:#EBF1FA" accept=".doc, .docx" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kepemilikan" class="col-md-4 col-form-label">Surat Pernyataan Kepemilikan Invensi (format pdf) *sudah di beri materai dan di ttd</label>
                        <div class="col-md-8">
                            <input type="file" class="form-control" id="kepemilikan" name="surat_pernyataan_kepemilikan_invensi_pdf" style="background-color:#EBF1FA" accept=".pdf" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kepemilikan" class="col-md-4 col-form-label">Surat Pernyataan Kepemilikan Invensi (format word) *sudah di beri materai dan di ttd</label>
                        <div class="col-md-8">
                            <input type="file" class="form-control" id="kepemilikan" name="surat_pernyataan_kepemilikan_invensi_word" style="background-color:#EBF1FA" accept=".doc, .docx" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ktp" class="col-md-4 col-form-label">Foto KTP Hak Cipta master (format word)</label>
                        <div class="col-md-8">
                            <input type="file" class="form-control" id="ktp" name="foto_ktp_hak_cipta_master_word" style="background-color:#EBF1FA" accept=".doc, .docx" required>
                        </div>
                    </div>
                
            </div>
            <div id="form-merek" style="display: none;" >
                <div class="form-group row">
                    <label for="tipePermohonan" class="col-md-4 col-form-label">Tipe Permohonan</label>
                    <div class="col-md-8">
                        <select class="form-control" id="tipePermohonan" name="tipe_permohonan" style="background-color: #E0E0E0;" >
                            <option value="Merek Dagang">Merek Jasa</option>
                            <option value="Merek Dagang">Merek Dagang</option>
                            <option value="Merek Dagang">Merek Dagang & Jasa</option>
                            <option value="Merek Dagang">Merek Kolektif</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tipemerk" class="col-md-4 col-form-label">Tipe Merk</label>
                    <div class="col-md-8">
                        <select class="form-control" id="tipemerk" name="tipe_merk" style="background-color: #E0E0E0;" >
                            <option value="Merek Dagang">Merek Kata</option>
                            <option value="Merek Dagang">Merek Kata dan Logo</option>
                            <option value="Merek Dagang">Merek Logo</option>
                            <option value="Merek Dagang">Merek 3 Dimensi</option>
                            <option value="Merek Dagang">Suara</option>
                            <option value="Merek Dagang">Hologram</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="label" class="col-md-4 col-form-label">Label Merk</label>
                    <div class="col-md-8">
                        <input type="file" class="form-control" id="labelmerk" name="labelmerk" style="background-color:#EBF1FA" accept=".jpg, .png" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="namamerk" class="col-md-4 col-form-label">Nama Merk</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="namamerk" name="namamerk" placeholder="Nama Merk" style="background-color:#EBF1FA">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsilabel" class="col-md-4 col-form-label">Deskripsi Label Merk</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="deskripsilabel" name="deskripsilabelmerk" placeholder="Deskripsi Label Merk" style="background-color:#EBF1FA">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="warna" class="col-md-4 col-form-label">Unsur Warna Dalam Label Merk</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="warna" name="warna" placeholder="Unsur Warna Dalam Label Merk" style="background-color:#EBF1FA">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kelas" class="col-md-4 col-form-label">Kelas Merek</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas Merek" style="background-color:#EBF1FA">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penjelasankelas" class="col-md-4 col-form-label">Penjelasan Kelas</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="penjelasankelas" name="penjelasankelas" placeholder="Penjelasan Kelas" style="background-color:#EBF1FA">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uraian" class="col-md-4 col-form-label">Pencarian Uraian Barang/Jasa</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="uraian" name="uraian" placeholder="Pencarian Uraian Barang/Jasa" style="background-color:#EBF1FA">
                    </div>
                </div>
            </div>
            <div id="form-hak" style="display: none;">
                <div class="form-group row">
                    <label for="namainventor" class="col-md-4 col-form-label">Nama Inventor</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="namainventor" name="nama" placeholder="Nama Inventor" style="background-color:#EBF1FA">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nohp" class="col-md-4 col-form-label">No Hp/Wa</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="nohp" name="no_hp" placeholder="No Hp/Wa" style="background-color:#EBF1FA">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prodi" class="col-md-4 col-form-label">Program Studi</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Program Studi" style="background-color:#EBF1FA">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jurursan" class="col-md-4 col-form-label">Jurusan</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan" style="background-color:#EBF1FA">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="JenisCiptaan" class="col-md-4 col-form-label">Jenis Ciptaan</label>
                    <div class="col-md-8">
                        <select class="form-control" id="jenisciptaan" name="jenis_ciptaan" style="background-color: #E0E0E0;" onchange="showForm()">
                            <option value="Karya Tulis">Karya Tulis</option>
                            <option value="Karya Seni">Karya Seni</option>
                            <option value="Komposisi Musik">Komposisi Musik</option>
                            <option value="Karya Audio Visual">Karya Audio Visual</option>
                            <option value="Karya Fotografi">Karya Fotografi</option>
                            <option value="Karya Drama & Koreografi">Karya Drama & Koreografi</option>
                            <option value="Karya Rekaman">Karya Rekaman</option>
                            <option value="Karya Lainnya">Karya Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="judul" class="col-md-4 col-form-label">Sub Jenis Ciptaan</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="subjenisciptaan" name="subjenisciptaan" placeholder="Sub Jenis Ciptaan" style="background-color:#EBF1FA">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="komputer" class="col-md-4 col-form-label">Hak CIpta Komputer & Non-Komputer</label>
                    <div class="col-md-8">
                        <select class="form-control" id="jenisciptaan" name="komputer" style="background-color: #E0E0E0;" >
                            <option value="komputer">Karya Komputer (Permohonan Pencatatan Ciptaan berupa Program Komputer)</option>
                            <option value="Non-Komputer">Non-Komputer</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="judulciptaan" class="col-md-4 col-form-label">Judul Ciptaan yang dimohonkan</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="judulciptaan" name="Judul Ciptaan" style="background-color:#EBF1FA" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uraianciptaan" class="col-md-4 col-form-label">Uraian Ciptaan</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="uraianciptaan" name="Uraian Ciptaan" style="background-color:#EBF1FA" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pernyataanhakcipta" class="col-md-4 col-form-label">Surat Pernyataan Hak Cipta</label>
                    <div class="col-md-8">
                        <input type="file" class="form-control" id="pernyataanhakcipta" name="pernyataanhakcipta" style="background-color:#EBF1FA" accept=".pdf" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="FormAlamatPencipta" class="col-md-4 col-form-label">Form Alamat Pencipta</label>
                    <div class="col-md-8">
                        <input type="file" class="form-control" id="FormAlamatPencipta" name="FormAlamatPencipta" style="background-color:#EBF1FA" accept=".pdf" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="PencatatanHakCipta" class="col-md-4 col-form-label">Form Permohonan Pencatatan Hak Cipta & Lampiran
                    </label>
                    <div class="col-md-8">
                        <input type="file" class="form-control" id="PencatatanHakCipta" name="PencatatanHakCipta" style="background-color:#EBF1FA" accept=".pdf" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="SuratPengalihanHakCipta" class="col-md-4 col-form-label">Surat Pengalihan Hak Cipta</label>
                    <div class="col-md-8">
                        <input type="file" class="form-control" id="SuratPengalihanHakCipta" name="SuratPengalihanHakCipta" style="background-color:#EBF1FA" accept=".pdf" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="LampiranKaryaHakCipta" class="col-md-4 col-form-label">Lampiran Karya Hak Cipta</label>
                    <div class="col-md-8">
                        <input type="file" class="form-control" id="LampiranKaryaHakCipta" name="LampiranKaryaHakCipta" style="background-color:#EBF1FA" accept=".pdf" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Luaran" class="col-md-4 col-form-label">Luaran wajib penelitian/ pengabdian masyarakat</label>
                    <div class="col-md-8">
                        <select class="form-control" id="luaran" name="luaran" style="background-color: #E0E0E0;" >
                            <option value="Ya"> Ya (Luaran wajib harus membayar biaya pendaftaran cipta sendiri, yaitu 200k untuk hak cipta non komputer dan 300k untuk hak cipta komputer)</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <a href="/pembayaran"> <button type="submit" class="btn btn-primary" style="background-color: #DAA520;color:white">Submit</button> </a>
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

<script>
    function showForm() {
        var jenisPermohonan = document.getElementById("jenisPermohonan").value;
        var formPaten = document.getElementById("form-paten");
        var formMerek = document.getElementById("form-merek");
        var formHak = document.getElementById("form-hak");

        // Tampilkan atau sembunyikan bagian form berdasarkan jenis permohonan yang dipilih
        if (jenisPermohonan === "Paten" || jenisPermohonan === "Paten Sederhana" || jenisPermohonan === "Desain Industri" || jenisPermohonan === "Rahasia Dagang" || jenisPermohonan === "Integrated Circuits" || jenisPermohonan === "Indikasi Geografis") {
            formPaten.style.display = "block";
            formMerek.style.display = "none";
            formHak.style.display = "none";
        } else if (jenisPermohonan === "Merek Dagang") {
            formPaten.style.display = "none";
            formMerek.style.display = "block";
            formHak.style.display = "none";
        } else if (jenisPermohonan === "Hak Cipta") {
            formPaten.style.display = "none";
            formMerek.style.display = "none";
            formHak.style.display = "block";
        } else {
            formPaten.style.display = "none";
            formMerek.style.display = "none";
            formHak.style.display = "none";
        }
    }
</script>

@endsection
