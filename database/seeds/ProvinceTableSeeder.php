<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProvinceTableSeeder extends Seeder
{   
    public function run()
    {
        $arrayProvinces = ['Arica','Parinacota','Iquique','Tamarugal','Antofagasta'];
        $arrayRegion = [1,1,2,2,1];
        $arrayGovernor = ['Ricardo Sanzana Oteiza','Roberto Lau Suárez','Francisco Pinto','Rubén Moraga Mamaní','Gabriel Toro'];
        for ($i=0; $i < count($arrayProvinces); $i++) { 
             DB::table('provinces')->insert([
            'name'=> $arrayProvinces[$i],
            'ubication'=>"",
            'region_id'=>$arrayRegion[$i],
            'governor'=>$arrayGovernor[$i]
            ]);
        }        
    }
}