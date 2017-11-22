<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GatheringCenter extends Model
{
    protected $table = 'gathering_centers';
    protected $fillable = ['id',
				'status_gathering_center',
				'description_gathering_center',
				'start',
				'end',
				'cost',
				'progress',];

	public function actions(){
		return $this->morphMany(Action::class,'action');
	}
}
