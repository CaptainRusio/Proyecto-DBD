<?php
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ActionTableSeeder extends Seeder
{
    public function run()
    {

        /*name
                commune_id*/
        $actions = ['Ayudame a ayudarte','Sin agua, sin vida','Mejor aire','Recostruyamos!','A cualquier lado!',];
        $typeActions = ['Volunteering', 'DonationCampaign','EventToBenefit','GatheringCenter'];
        $catastrophes = [0,1];
        for ($i=0; $i < count($actions) -1; $i++) { 
            
             DB::table('actions')->insert([
                'name'=> $actions[$i],
                'description' => "Todos lo mismo",
                'action_id' => rand(0,10),
                'action_type'=> $typeActions[$i],
                'catastrophe_id' => rand(1,2),
            ]);
        }        
    }
}