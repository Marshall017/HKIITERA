<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    protected $table = 'dokumen';

    protected $fillable = ['nama', 'jenis', 'kategori', 'file'];

    // Jika Anda tidak menggunakan kolom timestamps (created_at dan updated_at)
    public $timestamps = true;
}