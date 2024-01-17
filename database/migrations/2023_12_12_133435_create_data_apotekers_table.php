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
        Schema::create('data_apoteker', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_sik');
            $table->string('no_stra');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('jabatan');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_apoteker');
    }
};