<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventToBenefit extends Model
{
    protected $table = 'events_to_benefit';

    protected $fillable = ['id',
				'activities',];
public function actions(){
		return $this->morphMany(Action::class,'action');
	}
}		
