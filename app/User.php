<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email','password',
        'rnv_id', 
    ];

    public function action(){
    	return $this->hasMany(Action::class,'action_user_id');
    }
    public function donations(){
        return $this->hasMany(Donation::class, 'user_id');
    }
    public function rnv(){
        return $this->belongsTo(RNV::class,'rnv_id');
    }
    public function records(){
        return $this->hasMany(UserRecord::class,'id_record');
    }
}
