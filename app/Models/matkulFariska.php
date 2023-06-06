<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matkulFariska extends Model
{
    use HasFactory;
    protected $table = 'matkul_fariskas';
    protected $fillable = [
        'idMk',
        'nama_mk'
    ];
}
