<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table = 'records';
    protected $fillable = [
    	'action'
    ];

    public function users(){
    	return $this->hasMany(UserRecord::class,'id_user');
    }
}
