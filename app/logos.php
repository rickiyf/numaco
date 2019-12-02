<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class logos extends Model
{
    protected $table = 'logos';
    protected $fillable = ['texto','imagen'];
}
