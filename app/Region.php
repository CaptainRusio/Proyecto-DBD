<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regions';
    protected $fillable = [
        'name','ubication',
    ];

    public function provinces(){
    		return $this->hasMany(Province::class, 'region_id');
    }
}

