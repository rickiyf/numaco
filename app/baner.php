<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baner extends Model
{
    protected $table = 'baner';
    protected $fillable = ['texto1','texto2','imagen','seccion','orden'];
}
