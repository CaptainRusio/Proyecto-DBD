<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Role extends Model
{
    
	protected $table = 'users_roles';
	protected $fillable = ['users_id
	','roles_id',
	];
}
