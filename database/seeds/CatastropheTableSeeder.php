<?php
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CatastropheTableSeeder extends Seeder
{   
    public function run()
    {

        /*name
                commune_id*/
        $arrayCatastrophes = ['Terremoto','Diluvio'];
        $arrComunes = [1,2,3];
        for ($i=0; $i < count($arrayCatastrophes); $i++) { 
            
             DB::table('catastrophes')->insert([
                'name'=> $arrayCatastrophes[$i],
                'commune_id' => $arrComunes[$i],
            ]);
        }        
    }
}

/*
DB::table('provinces')->insert([
            'name'=> $arrayProvinces[$i],
            'ubication'=>"",
            'region_id'=>$arrayRegion[$i],
            'governor'=>$arrayGovernor[$i]
            ]);

*/