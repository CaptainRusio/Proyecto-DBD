<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name', 'record_id','rnv_id',
        'email','password',
    ];


    public function userRecord(){
    	return $this->belongsTo(UserRecord::class,'record_id');
    }
    public function action(){
    	return $this->hasMany(Action::class,'action_user_id');
    }
    public function donations(){
        return $this->hasMany(Donation::class, 'user_id');
    }
}
