<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
DB::table('users')->insert([
'username' => 'smartfarma01',
'email' => 'smartfarma01@gmail.com',
'password' => Hash::make('123456789'),
'level' => 'admin',
'no_hp' => '082299767334',
'alamat' => 'bengkalis'
]);
}
}