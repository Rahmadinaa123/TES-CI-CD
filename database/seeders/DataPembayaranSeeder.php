<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataPembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('data_pembayaran')->insert([
        'nama_pemesan' => 'dina',
        'metode_pengiriman' => 'antar ke alamat',
        'metode_pembayaran' => 'cod',
        'obat' => 'parastamol',
        'kuantitas' => '3',
        'harga' => '45.000',
        'gambar' => 'parastamol.png',
        'detail_pembelian' => 'pesan anda segera dikirim',
        'status' => 'dikirim',
        'id_user' => '2',
    ]);

    }
}