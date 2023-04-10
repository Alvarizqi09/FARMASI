<?php

namespace App\Models;
use Eloquent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = 'Pembelians';
    protected $fillable = [
        'idobat', 
        'idsupplier',
        ,
    ];
}