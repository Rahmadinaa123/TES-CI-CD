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
        Schema::create('data_obat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_obat');
            $table->string('no_edar');
            $table->string('kategori');
            $table->string('harga');
            $table->string('deskripsi');
            $table->string('komposisi');
            $table->string('kemasan');
            $table->string('dosis');
            $table->string('manfaat');
            $table->string('cara_mengonsumsi');
            $table->string('keterangan');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_obat');
    }
};