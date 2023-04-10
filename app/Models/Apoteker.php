<?php

namespace App\Models;
use Eloquent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apoteker extends Model
{
    use HasFactory;
    protected $table = 'apoteker';
    protected $fillable = [
        'nama_apoteker', 
        'email',
        'jam_kerja',
    ];
}
