<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tanah extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tanah';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'kode_kec',
        'kode_kel',
        'nomor',
        'noreg',
        'status',
        'kode',
        'papan_nama',
        'penggunaan',
        'rencana_pola',
        'alamat',
        'luas',
        'pemegang_hak',
        'pengguna_barang',
        'lahan_terbangun',
        'patok',
        'zona_nilai',
        'file_sertifikat',
        'created_at',
        'updated_at',
        'deleted_at',
        'koordinat',
        'type',
        'sumber_input',
        'tahun_sertifikat',
        'lat_koordinat_patok',
        'lng_koordinat_patok',
        'nomor_hak',
        'kecamatan',
        'kelurahan',
        'id_sistem',
    ];
}
