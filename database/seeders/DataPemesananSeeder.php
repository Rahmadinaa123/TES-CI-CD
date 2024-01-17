<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataPemesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('data_pemesanan')->insert([
        'nama_pemesan' => 'dina',
        'nama_obat' => 'parastamol',
        'tanggal_pemesanan' => '15-12-2023',
        'harga_obat' => '15.000',
        'kuantitas' => '3',
        'total_harga' => '45.000',
        'waktu_pengiriman' => '16-12-2023',
        'gambar' => 'parastamol.png',
        'id_user' => '2',
    ]);

    }
}