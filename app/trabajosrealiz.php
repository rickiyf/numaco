<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trabajosrealiz extends Model
{
    protected $table = 'trabajosrealiz';
    protected $fillable = ['titulo','imagen','orden','texto'];
}
