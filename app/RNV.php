<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RNV extends Model
{
    protected $table = 'rnv';

    protected $fillable = ['id','name','type_of_job'];

    public function users(){
    	return $this->hasMany(User::class,'rnv_id');
    }
}
