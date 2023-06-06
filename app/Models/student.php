<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

     protected $fillable = [
        'NIM', 'nama', 'jurusan', 'telepon' ,'jeniskelamin','email', 'NIK', 'alamat',
     ];
     protected $table = 'mahasiswaAlvarizqi';
  protected $hidden;
}
