<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodiFariska extends Model
{
    use HasFactory;
    protected $table = 'prodi_fariskas';
    protected $fillable = [
        'id_prodi',
        'nama_prodi'
    ];
}
