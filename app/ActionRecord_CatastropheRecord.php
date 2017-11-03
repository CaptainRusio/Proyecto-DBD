<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActionRecord_CatastropheRecord extends Model
{
    protected $table = 'action_record_catastrophe_record';
    protected $filliable = ['action_record_id
		','catastrophe_record_id'];
}
