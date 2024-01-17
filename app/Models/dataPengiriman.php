<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataPengiriman extends Model
{
    use HasFactory;
     use HasFactory;
    protected $table = 'data_pengiriman';
    
     protected $fillable = [
        'alamat_pengiriman', 
        'nama_pelanggan', 
        'no_hp', 
        'total_harga_barang',
        'total_belanja'
    ];
}