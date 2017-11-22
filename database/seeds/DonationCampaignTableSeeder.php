<?php

use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DonationCampaignTableSeeder extends Seeder
{   
    public function run()
    {

        /*name
                commune_id*/
        for ($i=0; $i < 10; $i++) { 
            
             DB::table('donation_campaigns')->insert([
                'goal' => rand(0,100),
                'actual_amount' => rand(0,100),
                'start' => Carbon\Carbon::parse('2000-01-01'),
                'end' => Carbon\Carbon::parse('2000-01-01'),
                'cost' => rand(0,100),
                'progress' => rand(0,100),
                'anonymous_donation' => rand(0,100),
            ]);
        }        
    }
}
