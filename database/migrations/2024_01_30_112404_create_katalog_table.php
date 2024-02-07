<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('katalog', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); 
            $table->string('eissn');
            $table->string('penulis1');
            $table->string('penulis2');
            $table->string('penulis3');
            $table->string('publish');
            $table->text('abstrak');
            $table->string('katakunci');
            $table->string('cover');
            $table->string('file'); // Gunakan tipe kolom yang sesuai untuk menyimpan path file atau data file jika diperlukan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katalog');
    }
};