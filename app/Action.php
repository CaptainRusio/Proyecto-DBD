<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $table = 'actions';

    protected $fillable = [
        'name', 'description',
        'action_user_id',
        'action_rnv_id',
        'action_record_id',
    ];

    public function user(){
    	return $this->belongsTo(User::class,'action_user_id');
    }

    public function actionRec(){
    	return $this->hasOne(ActionRecord::class,'action_record_id');
    }

    public function rnv(){
    	return $this->belongsTo(RNV::class,'action_rnv_id');
    }
}
