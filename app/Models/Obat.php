<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Obat extends Model
{
    use HasFactory;
    protected $table = 'obats';
    protected $fillable = [
        'id_obat',
        'nama_obat',
        'efek_samping',
        'dosis',
        'kategori',
        'kategori_obat',
        'satuan'
    ];

    public static function join() 
    {
        $data = DB::table('obats')
            ->join('types', 'obats.kategori', 'types.id')
            ->join('categories', 'obats.kategori_obat', 'categories.id')
            ->join('satuans', 'obats.satuan', 'satuans.id')
            ->select('obats.*', 'satuans.satuan as satuans', 'categories.kategori_obat as categories', 'types.kategori as types')
            ->get();
            return $data;
    }
}
