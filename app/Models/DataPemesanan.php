<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPemesanan extends Model
{
    use HasFactory;
      use HasFactory;
    protected $table = 'data_pemesanan';
    
     protected $fillable = [
        'nama_pemesan', 
        'nama_obat', 
        'tanggal_pemesanan', 
        'harga_obat', 
        'kuantitas', 
        'total_harga',
        'waktu_pengiriman',
        'gambar',
        'id_user'
    ];
}