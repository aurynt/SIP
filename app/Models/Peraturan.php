<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peraturan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'peraturan';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'judul',
        'id_jenis',
        'nomor',
        'tahun',
        'instansi',
        'file',
        'tentang',
        'didownload',
        'dilihat',
    ];
}
