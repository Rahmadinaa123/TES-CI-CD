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
        Schema::create('data_pemesanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->string('nama_obat');
            $table->string('tanggal_pemesanan');
            $table->string('harga_obat');
            $table->string('kuantitas');
            $table->string('total_harga');
            $table->string('waktu_pengiriman');
            $table->string('gambar');
            $table->string('id_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pemesanan');
    }
};