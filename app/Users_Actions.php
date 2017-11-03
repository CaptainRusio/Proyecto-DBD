<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_Actions extends Model
{
    
	protected $table = 'users_actions';
	protected $filliable = [
		'users_id','actions_id',
	];


}
