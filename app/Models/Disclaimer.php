<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Disclaimer extends Model
{
    use HasFactory;
    protected $table = 'pengaturan_disclaimer';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'deskripsi_disclaimer',
        'pernyataan_persetujuan',
        'konfirmasi_persetujuan',
    ];
}
