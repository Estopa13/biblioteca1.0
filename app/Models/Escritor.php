<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escritor extends Model
{

    protected  $table="escritores";
    protected  $primaryKey="id_escritor";
    protected  $fillable=['nome','ape','ame'];

    public $timestamps=false;
}
