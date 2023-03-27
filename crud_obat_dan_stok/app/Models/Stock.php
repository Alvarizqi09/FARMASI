<?php

namespace App\Models;
use Eloquent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $table = 'stocks';
    protected $fillable = [
        'nama_obat', 
        'jenis_obat',
        'dosis',
        'efek_samping',
        'bentuk_obat',
        'kategori_resep',
        'stok_minimal'
    ];
}
