<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_ActionRecord extends Model
{
    protected $table = 'user_action_record';
    protected $fillable = [
        'users_id
		','action_record_id',
    ];
}
