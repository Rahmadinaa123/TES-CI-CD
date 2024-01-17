<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataObat extends Model
{
    use HasFactory;
     use HasFactory;
    protected $table = 'data_obat';
    
     protected $fillable = [
        'nama_obat', 
        'no_edar', 
        'kategori', 
        'harga', 
        'deskripsi', 
        'komposisi',
        'kemasan',
        'dosis',
        'manfaat',
        'cara_mengonsumsi',
        'keterangan',
        'gambar'
    ];
}