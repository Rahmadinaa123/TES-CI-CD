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
        Schema::create('data_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pemesanan');
            $table->string('tanggal_pemesanan');
            $table->string('nama_pemesan');
            $table->string('alamat');
            $table->string('metode_pengiriman');
            $table->string('metode_pembayaran');
            $table->string('obat');
            $table->string('kuantitas');
            $table->string('harga');
            $table->string('total_belanja');
            $table->string('gambar');
            $table->string('detail_pembelian');
            $table->string('status');
            $table->string('id_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pembayaran');
    }
};