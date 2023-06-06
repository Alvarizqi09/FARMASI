<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswaFariska extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_fariskas';
    protected $fillable = [
        'nim',
        'nama',
        'nik',
        'jk',
        'agama',
        'alamat',
        'telp',
        'email',
        'prodi',
    ];

    public static function Join() {
        $data = DB::table('mahasiswa_fariskas')
            ->join('prodi_fariskas', 'mahasiswa_fariskas.prodi', 'prodi_fariskas.id')
            ->select('mahasiswa_fariskas.*', 'prodi_fariskas.nama_prodi as nama_prodi')
            ->get();

        return $data;
    }
}
