<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsetJalanProject extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'aset_jalan_project';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'SHAPE',
        'nama_ruas',
        'tahun_data',
        'status',
        'fungsi',
        'ruas_awal',
        'ruas_akhir',
        'kode_patok',
        'km_awal',
        'km_akhir',
        'panjang_ja',
        'lebar_perk',
        'lhrt',
        'vcr',
        'tipe_jalan',
        'mst',
        'tanah',
        'macadam',
        'aspal',
        'kelurahan',
        'nib',
        'luastertul',
        'tipehak',
        'tipeproduk',
        'hp',
        'luaspeta',
        'kondisi_se',
        'kondisi_ri',
        'kondisi_ru',
        'kecamatan',
        'file_sertifikat',
        'deleted',
    ];
}
