<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataPembayaran extends Model
{
    use HasFactory;
     use HasFactory;
    protected $table = 'data_Pembayaran';
    
     protected $fillable = [
         
        'kode_pemesanan', 
        'tanggal_pemesanan', 
        'nama_pemesan',
        'alamat',  
        'metode_pengiriman', 
        'metode_pembayaran', 
        'obat', 
        'kuantitas', 
        'harga',
        'total_belanja',
        'gambar',
        'status',
        'id_user'
    ];
}