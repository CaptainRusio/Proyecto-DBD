<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteering extends Model
{
    protected $table = 'volunteerings';
    protected $fillable = ['id',
				  'type_of_job',
				  'time',
				  'status_volunteering',
				  'start',
				  'end',
				  'cost',
				  'progress',];



	//Polimorfismo con medida.
	public function actions(){
		return $this->morphMany(Action::class,'action');
	}
}
