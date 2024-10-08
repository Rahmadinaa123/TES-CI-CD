<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuktiPembayaran extends Model
{
    use HasFactory;
    protected $table = 'bukti_pembayaran';
    
     protected $fillable = [
        'tanggal_pembayaran', 
        'nama_pemesan', 
        'kode_pemesanan',
        'bukti_tf',
    ];
}