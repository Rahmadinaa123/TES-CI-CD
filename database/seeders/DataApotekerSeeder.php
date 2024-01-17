<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataApotekerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('data_apoteker')->insert([
        'nama' => 'dina',
        'no_sik' => 'SIPA/1266-2023',
        'no_stra' => 'STRA/1266-2023',
        'no_hp' => '082276768989',
        'alamat' => 'Rupat',
        'jabatan' => 'Owner',
        'status' => 'Aktif',
    ]);

    DB::table('data_apoteker')->insert([
        'nama' => 'Ratih',
        'no_sik' => 'SIPA/1298-2023',
        'no_stra' => 'STRA/1298-2023',
        'no_hp' => '08227680909',
        'alamat' => 'Rupat',
        'jabatan' => 'Selenium',
        'status' => 'Aktif',
    ]);

    DB::table('data_apoteker')->insert([
        'nama' => 'Suci',
        'no_sik' => 'SIPA/1209-2023',
        'no_stra' => 'STRA/1209-2023',
        'no_hp' => '082276889076',
        'alamat' => 'Siak',
        'jabatan' => 'Penanggung Jawab',
        'status' => 'Aktif',
    ]);

    }
}