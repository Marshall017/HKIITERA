<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    use HasFactory;

    protected $table = 'tim';

    protected $fillable = ['nama', 'jabatan', 'prodi','scopus','scholar','sinta', 'linkedin','file_foto'];

    // Jika Anda tidak menggunakan kolom timestamps (created_at dan updated_at)
    public $timestamps = true;
}
