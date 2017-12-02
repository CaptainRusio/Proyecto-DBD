<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

   	protected $fillable = ['name',
				'number',
				'gathering_id'
			];
    public function gatheringCenter(){
    	return $this->belongsTo(GatheringCenter::class,'gathering_id');
    }
}
