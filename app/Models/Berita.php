<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    protected $fillable = ['judul', 'sub_judul', 'author', 'tanggal_unggah', 'isi_berita', 'upload_gambar'];

    // Jika Anda tidak menggunakan kolom timestamps (created_at dan updated_at)
    public $timestamps = true;
}
