<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GatheringCenter extends Model
{
    protected $table = 'gathering_centers';
    protected $fillable = ['id',
				'status_gathering_center',
			];

	public function actions(){
		return $this->morphMany(Action::class,'action');
	}
	public function articles(){
		return $this->hasMany(Article::class,'gathering_id');
	}
}
