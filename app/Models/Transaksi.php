<?php

namespace App\Models;
use Eloquent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = 'Transaksis';
    protected $fillable = [
        'notransaksi', 
        'tgltransaksi', 
        'noRM',
        'namapelanggan',
        'namaobat',
        'idobat',
        'jumlahobat',
        'totalharga',
        'status',

    ];
}
