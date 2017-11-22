<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RegionTableSeeder extends Seeder
{
    public function run()
    {   $arrayRegion = ['Arica y Parinacota','Tarapacá'];
        for ($i=0; $i < count($arrayRegion); $i++) { 
             DB::table('regions')->insert([
            'name'=> $arrayRegion[$i],
            'ubication'=>""
            ]);
        }        
    }

}