<?php


namespace App;



use Illuminate\Notifications\Notifiable;    
use Illuminate\Foundation\Auth\User as Authenticatable; 
class User extends Authenticatable  
{

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email','password',
        'rnv_id', 
    ];

    public function actionUser(){
    	return $this->belongsToMany(Action::class,'users_actions','users_id','actions_id');
    }

    public function roles(){
        return $this->belongsToMany(Role::class,'users_roles','roles_id','users_id');
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
