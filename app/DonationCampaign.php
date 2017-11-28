<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationCampaign extends Model
{
    protected $table = 'donation_campaigns';
    protected $fillable = [ 'id',
					'goal',
					'actual_amount',
					'anonymous_donation',];


    //Relaciones
		//Herencia con medida	
	public function actions(){
		return $this->morphMany(Action::class,'action');
	}

	public function donations(){
		return $this->hasMany(Donation::class,'donationCampaign_id');
	}
}
