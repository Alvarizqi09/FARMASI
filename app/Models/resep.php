<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resep extends Model
{
    use HasFactory;

     protected $fillable = [
        '', 'ID_Apoteker', 'No_Resep', 'Nama_Pasien', 'No_RM', 'Nama_Dokter', 'Nama_Obat','Nama_Dosis','tanggal_resep'
     ];
}
