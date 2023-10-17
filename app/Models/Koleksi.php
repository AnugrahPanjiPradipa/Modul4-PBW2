<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Nama    : Anugrah Panji Pradipa
// NIM     : 6706223061

class Koleksi extends Model
{
    use HasFactory;

    protected $table = 'koleksi';
    
    protected $fillable = [
        'namaKoleksi',
        'jenisKoleksi',
        'jumlahKoleksi'
    ];
}

