<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catastrophe extends Model
{
    protected $table = 'catastrophes';

    protected $fillable = [
    	'id',
        'name',
        'commune_id',
    ];
    
    public function commune(){
    	return $this->belongsTo(Commune::class,'commune_id');
    }
}
