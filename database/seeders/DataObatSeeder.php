<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('data_obat')->insert([
        'nama_obat' => 'parastamol',
        'no_edar' => '908765',
        'kategori' => 'Analgetik',
        'harga' => '15.000',
        'deskripsi' => 'bat yang berfungsi untuk meredakan demam dan nyeri, termasuk untuk mengobati nyeri haid hingga sakit gigi yang tersedia dalam bentuk tablet, sirup, tetes, suppositoria dan infus.',
        'komposisi' => 'Setiap tablet mengandung Paracetamol 500 mg',
        'kemasan' => 'Dus, 10 Strip @ 10 Tablet',
        'dosis' => 'Dewasa: 1-2 kaplet, 3-4 kali per hari. Penggunaan maximum 8 kaplet per hari. Anak 7-12 tahun : 0.5 - 1 kaplet, 3-4 kali per hari. Penggunaan maximum 4 kaplet per hari.',
        'manfaat' => 'mengatasi demam dan nyeri tubuh',
        'cara_mengonsumsi' => 'Orang dewasa dapat mengonsumsi 1 atau 2 tablet 500 miligram paracetamol setiap 4-6 jam',
        'keterangan' => ' obat yang berfungsi untuk meredakan demam dan nyeri, termasuk untuk mengobati nyeri haid hingga sakit gigi yang tersedia dalam bentuk tablet, sirup, tetes, suppositoria dan infus',
        'gambar' => 'parastamol.png',
    ]);
    }
}