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
        $arrayTypes = ['Terremoto','Inundación'];
        $arrayDescriptions = ['Gran terremoto que asoto a la zona de Valparaiso.','Inundaciones en toda la tierra de Chiloe, producote del diluvio, se necesitan voluntarios.'];
        $arrComunes = [1,2,3];
        for ($i=0; $i < count($arrayTypes); $i++) { 
            
             DB::table('catastrophes')->insert([
                'name'=> $arrayTypes[$i],
                'description' => $arrayDescriptions[$i],
                'type' => $arrayTypes[$i],
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