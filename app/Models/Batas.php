<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Batas extends Model
{
    use HasFactory;
    protected $table = 'tanah_has_batas';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    use SoftDeletes;
    protected $fillable = [
        'id_tanah',
        'type',
        'coordinates',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
}
