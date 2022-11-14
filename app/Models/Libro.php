<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Libro extends Model
{
    use HasFactory;
    //use SoftDeletes;
    public $timestamps=false;
    protected $primaryKey='id_libro';

    protected $fillable=[
      'id_libro',
      'nom_libro',
        'codigo',
        'anio_pub',
        'id_editorial',
        'id_clasificacion'
    ];
}
