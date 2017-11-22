<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $table = 'actions';

    protected $fillable = [
        'name', 'description',
        'action_user_id',
    ];

    public function user(){
    	return $this->belongsTo(User::class,'action_user_id');
    }

    public function rnv(){
    	return $this->belongsTo(RNV::class,'action_rnv_id');
    }

    public function action(){
        return $this->morphTo();
    }
}
