<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use HasFactory;
    //use SoftDeletes;
    public $timestamps=false;
    protected $primaryKey='id_persona';
    protected $fillable=[
      'id_persona',
      'nom',
        'ap',
        'am',
        'id_tipo'
    ];
}
