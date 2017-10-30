<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pruebaBaseDatos extends Model
{
	public $table = "pruebaBaseDatos";
    protected $fillable = [
        'nombre', 'rut',
    ];
}
