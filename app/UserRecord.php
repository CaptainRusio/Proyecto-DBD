<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRecord extends Model
{
    protected $table = 'user_record';
	protected $fillable = ['id_user
							','id_record'];
 	
 	public function user(){
 		return $this->belongsTo(User::class,'id_user');
 	}
 	public function record(){
 		return $this->belongsTo(Record::class,'id_record');
 	}
}
