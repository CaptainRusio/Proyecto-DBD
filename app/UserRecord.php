<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRecord extends Model
{
    protected $table = 'user_record';
	
	protected $filliable = ['name','action_date','description',];


    public function userRecord(){
    	return $this->hasMany(User::class,'record_id');
    }

    
    
}
