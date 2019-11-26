<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aplicaciones extends Model
{
    protected $table = 'aplicaciones';
    protected $fillable = ['titulos','imagenes','texto','descripcion','pdf','orden'];

}
