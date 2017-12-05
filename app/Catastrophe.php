<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catastrophe extends Model
{
    protected $table = 'catastrophes';

    protected $fillable = [
    	'id',
        'name',
        'description',
        'type',
        'commune_id',
        
    ];
    
    public function commune(){
    	return $this->belongsTo(Commune::class,'commune_id');
    }
    public function action(){
        return $this->hasMany(Action::class,'catastrophe_id');
    }
    

}
