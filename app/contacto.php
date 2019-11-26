<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    protected $table = 'contacto';
    protected $fillable = ['mapa','direccion','telefono1','telefono2','correo','texto'];
}
