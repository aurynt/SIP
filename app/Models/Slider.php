<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use HasFactory;
    protected $table = 'pengaturan_slider';
    protected $primaryKey = 'id';
    public $incrementing = true;
    use SoftDeletes;
    public $timestamps = false;
    protected $fillable = [
        'gambar_slider',
        'created_at'
    ];
}
