<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tim', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jabatan');
            $table->string('prodi');
            $table->string('scopus')->nullable();
            $table->string('scholar')->nullable();
            $table->string('sinta')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('file_foto'); // Gunakan tipe kolom yang sesuai untuk menyimpan path file atau data file jika diperlukan
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tim');
    }
};
