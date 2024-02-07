<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    use HasFactory;

    protected $table = 'katalog';

    protected $fillable = ['judul', 'eissn', 'penulis1','penulis2','penulis3','abstrak','katakunci','cover', 'file'];

    // Jika Anda tidak menggunakan kolom timestamps (created_at dan updated_at)
    public $timestamps = true;
}
