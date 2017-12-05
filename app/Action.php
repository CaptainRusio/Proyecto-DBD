<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Volunteering;
use App\DonationCampaign;
use App\EventToBenefit;
use App\GatheringCenter;

class Action extends Model
{
    protected $table = 'actions';

    protected $fillable = [
        'name', 'description',
        'action_user_id',
        'catastrophe_id',
        'start',
        'end',
        'activate',
        'confirmed',
        'progress',
    ];

    public function user(){
    	return $this->belongsToMany(User::class,'users_actions','actions_id','users_id');
    }
    public function action(){
        return $this->morphTo();
    }
    public function catastrophes(){
        return $this->belongsTo(Catastrophe::class,'catastrophe_id');
    }
}
