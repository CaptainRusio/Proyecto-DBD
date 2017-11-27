<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['type','description',];



    public function roles(){
    	return $this->belongsToMany(User::class,'users_roles','users_id','roles_id');
    }
}
