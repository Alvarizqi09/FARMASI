<?php

namespace App\Models;
use Eloquent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    protected $table = 'supplier';
    protected $fillable = [
        'id_manager', 
        'nama', 
        'email',
        'alamat',
        'obat_tersedia',
        'harga'
    ];
}
