<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataApoteker extends Model
{
    use HasFactory;
    protected $table = 'data_apoteker';
    
     protected $fillable = [
        'nama', 
        'no_sik', 
        'no_stra',
        'no_hp',
        'alamat', 
        'jabatan', 
        'status'
    ];
}