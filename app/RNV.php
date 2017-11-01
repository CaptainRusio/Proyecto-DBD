<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RNV extends Model
{
    protected $table = 'rnv';



    public function action(){
    	return $this->hasMany(Action::class,'action_rnv_id');
    }
}
