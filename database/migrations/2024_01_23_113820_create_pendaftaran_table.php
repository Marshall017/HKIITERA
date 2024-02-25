<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranTable extends Migration
{
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('status');
            $table->string('jenis_permohonan');
            $table->string('nama')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('prodi')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('judul')->nullable();
            $table->string('deskripsi_paten_word')->nullable();
            $table->string('deskripsi_paten_pdf')->nullable();
            $table->string('abstrak_word')->nullable();
            $table->string('abstrak_pdf')->nullable();
            $table->string('klaim_pdf')->nullable();
            $table->string('gambar_invensi_pdf')->nullable();
            $table->string('formulir_permohonan_paten_pdf')->nullable();
            $table->string('formulir_permohonan_substantif_paten_pdf')->nullable();
            $table->string('surat_pengalihan_hak_itera_pdf')->nullable();
            $table->string('surat_pengalihan_hak_itera_word')->nullable();
            $table->string('surat_pernyataan_kepemilikan_invensi_pdf')->nullable();
            $table->string('surat_pernyataan_kepemilikan_invensi_word')->nullable();
            $table->string('foto_ktp_hak_cipta_master_word')->nullable();

            $table->string('tipe_permohonan')->nullable();
            $table->string('tipe_merk')->nullable();
            $table->string('labelmerk')->nullable();
            $table->string('namamerk')->nullable();
            $table->string('deskripsilabelmerk')->nullable();
            $table->string('warna')->nullable();
            $table->string('kelas')->nullable();
            $table->string('penjelasankelas')->nullable();
            $table->string('uraian')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
}
