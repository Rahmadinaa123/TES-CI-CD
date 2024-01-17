<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataPelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('data_pelanggan')->insert([
        'nama' => 'dina',
        'umur' => '21',
        'alamat' => 'bengkalis',
        'no_hp' => '087654332',
        'riwayat_transaksi' => '08-12-2023',
    ]);

     DB::table('data_pelanggan')->insert([
        'nama' => 'suci',
        'umur' => '20',
        'alamat' => 'senggoro',
        'no_hp' => '082345678',
        'riwayat_transaksi' => '19-12-2023',
    ]);
    
       DB::table('data_pelanggan')->insert([
        'nama' => 'ratih',
        'umur' => '22',
        'alamat' => 'bantan',
        'no_hp' => '087678923',
        'riwayat_transaksi' => '21-12-2023',
    ]);
    }
}