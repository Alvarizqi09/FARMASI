<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilaiFariska extends Model
{
    use HasFactory;
    protected $table = 'nilai_fariskas';
    protected $fillable = [
        'nilai',
        'nama',
        'mk',
    ];

    public static function Join() {
        $data = DB::table('nilai_fariskas')
            ->join('mahasiswa_fariskas', 'nilai_fariskas.nama', 'mahasiswa_fariskas.id')
            ->join('matkul_fariskas', 'nilai_fariskas.mk', 'matkul_fariskas.id')
            ->select('nilai_fariskas.*', 'mahasiswa_fariskas.nama as nama, matkul_fariskas.nama_mk as matkul')
            ->get();

        return $data;
    }


}
