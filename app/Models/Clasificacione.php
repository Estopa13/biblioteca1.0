<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificacione extends Model
{
    use HasFactory;
    public $timestamps=false;
    //public $table='clasificaciones';
    protected $primaryKey='id_clasificacion';
    protected $fillable=[
        'id_clasificacion',
        'desc_c',
    ];
}
