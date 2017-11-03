<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatastropheRecord extends Model
{
    protected $table = 'catastrophe_record';
    protected $fillable = [
        'name', 'date_start',
        'date_end','progress',
    ];




    public function catastrophe(){
    	return $this->hasOne(Catastrophe::class,'catastrophe_record_id');
    }
}
