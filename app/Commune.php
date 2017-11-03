<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    protected $table = 'communes';
    protected $fillable = [
        'name','province_id','ubication',
    ];



    public function catastropheRec(){
    	return $this->hasMany(Catastrophe::class,'commune_id');
    }

    public function province(){
    	return $this->belongsTo(Province::class,'province_id');
    }
}
