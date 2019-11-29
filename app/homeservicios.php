<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homeservicios extends Model
{
    protected $table = 'home_servicios';
    protected $fillable = ['titulo','descripcion','imagen','items'];
}
