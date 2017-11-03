<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActionRecord extends Model
{
    protected $table = 'action_record';
    protected $fillable = [
        'name', 'date_start',
        'date_end','cost',
        'progress',
    ];


    public function action(){
    	return $this->hasOne(Action::class,'action_record_id');
    }
}
