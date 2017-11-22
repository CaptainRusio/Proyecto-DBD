<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $table = 'actions';

    protected $fillable = [
        'name', 'description',
        'action_user_id',
        'catastrophe_id',
    ];

    public function user(){
    	return $this->belongsToMany(User::class,'users_actions','users_id','actions_id');
    }
    public function action(){
        return $this->morphTo();
    }
    public function catastrophes(){
        return $this->hasMany(Catastrophe::class,'catastrophe_id');
    }
}
