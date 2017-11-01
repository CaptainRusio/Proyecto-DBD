<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRecord extends Model
{
    protected $table = 'user_record';
	
	protected $filliable = ['name',];


    public function userRecord(){
    	return $this->hasMany(User::class,'record_id');
    }

    
    
}
