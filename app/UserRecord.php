<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userRecord extends Model
{
    protected $table = 'user_record';
	
	protected $fillable = ['id','name','action_date','description',];


    public function userRecord(){
    	return $this->hasMany(User::class,'record_id');
    }

    
    
}
