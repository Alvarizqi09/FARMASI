<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class M_Resep extends Model
{
    use SoftDeletes;

    protected $table = 'resep';
    protected $fillable =[
        'nama_Pasien',
        'nama_Dokter',
        'nama_Obat',
        'Tanggal_pengambilan',
    ];
    protected $hidden;
}
