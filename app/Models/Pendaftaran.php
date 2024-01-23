<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran';

    protected $fillable = [
        'email',
        'status',
        'jenis_permohonan',
        'nama',
        'no_hp',
        'prodi',
        'jurusan',
        'judul',
        'deskripsi_paten_word',
        'deskripsi_paten_pdf',
        'abstrak_word',
        'abstrak_pdf',
        'klaim_pdf',
        'gambar_invensi_pdf',
        'formulir_permohonan_paten_pdf',
        'formulir_permohonan_substantif_paten_pdf',
        'surat_pengalihan_hak_itera_pdf',
        'surat_pengalihan_hak_itera_word',
        'surat_pernyataan_kepemilikan_invensi_pdf',
        'surat_pernyataan_kepemilikan_invensi_word',
        'foto_ktp_hak_cipta_master_word',
    ];

    // Jika Anda tidak menggunakan kolom timestamps (created_at dan updated_at)
    public $timestamps = true;
}
