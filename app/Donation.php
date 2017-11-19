<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'donations';
    protected $fillable = ['id',
    			'total_amount',
    			'user_id'];

  	public function user(){
  		return $this->belongsTo(User::class, 'user_id');
  	}
}
