<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $fillable = [
        'name','region_id','governor',
    ];


    public function communes(){
    	return $this->hasMany(Commune::class,'province_id');
    }
    public function region(){
    	return $this->belongsTo(Region::class,'region_id');
    }
}
