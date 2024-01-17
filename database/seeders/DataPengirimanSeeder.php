<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DataPengirimanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('data_pengiriman')->insert([
        'alamat_pengiriman' => 'bengkalis,bantan',
        'nama_pelanggan' => 'dina',
        'no_hp' => '0822995788',
        'total_harga_barang' => '30.000',
        'total_belanja' => '30.000',
    ]);

    }
    }