<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drainase extends Model
{
    use HasFactory;
    protected $table = 'drainase';
    protected $primaryKey = 'id';
    public $incrementing = true;
    use SoftDeletes;
    protected $fillable = [
        "kel",
        "kode_kec",
        "kode_kel",
        "nama_ruas",
        "panjang",
        "lebar",
        "luas_sertifikat",
        "luas_peta",
        "status",
        "fungsi",
        "tipe_hak",
        "tipe_produk",
        "tipe_jalan",
        "hp",
        "nib",
        "kode_patok",
        "ruas_awal",
        "ruas_akhir",
        "km_awal",
        "km_akhir",
        "kondisi_ringan",
        "kondisi_sedang",
        "kondisi_rusak",
        "lhrt",
        "vcr",
        "mst",
        "tanah",
        "macadam",
        "aspal",
        "tahun",
        "file_sertifikat",
        "created_at",
        "updated_at",
        "deleted_at",
        "koordinat",
        "type",
        "sumber_input",
        "kecamatan",
        "id_sistem"
    ];
}
