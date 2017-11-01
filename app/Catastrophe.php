<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catastrophe extends Model
{
    protected $table = 'catastrophes';

    protected $fillable = [
        'name',
    ];



    public function catastropheRec(){
    	return $this->hasOne(CatastropheRecord::class,'catastrophe_record_id');
    }
    
    public function commune(){
    	return $this->belongsTo(Commune::class,'commune_id');
    }
}
