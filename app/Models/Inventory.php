<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $table = 'inventories';
    protected $fillable = [
        'id_obat', 
        'nama_obat', 
        'jumlah_tersedia',
        'expired',
        'lokasi_simpan',
    ];
}