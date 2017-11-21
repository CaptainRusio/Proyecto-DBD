<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProvinceTableSeeder extends Seeder
{   
    public function run()
    {
        $arrayProvinces = ['Arica','Parinacota','Iquique','Tamarugal'];
        $arrayRegion = [1,1,2,2];
        $arrayGovernor = ['Ricardo Sanzana Oteiza','Roberto Lau Suárez','Francisco Pinto','Rubén Moraga Mamaní'];
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