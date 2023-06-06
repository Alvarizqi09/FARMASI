<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // field apa saja yang bisa di isi
    public $fillable = ['IDMahasiswa', 'Nama', 'Jenis_Kelamin', 'Prodi', 'Agama', 'NIK', 'Telepon', 'Alamat', 'Tanggal_Lahir'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;
}
