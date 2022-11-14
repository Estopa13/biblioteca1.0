<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estante extends Model
{
    use HasFactory;
    //use SoftDeletes;
    public $timestamps=false;
    protected $primaryKey='id_estante';
    protected $fillable=[
      'id_persona',
        'id_libro',
        'fecha_pres',
        'fecha_dev',
    ];
    public function libros(){
        return $this->hasOne('App\Models\Libro','id_libro', 'id_libro');
    }
    public function personas(){
        return $this->hasOne('App\Models\Persona', 'id_persona', 'id_persona');
    }
}
