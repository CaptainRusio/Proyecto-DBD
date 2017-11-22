<?php

use Illuminate\Database\Seeder;

class DonationTableSeeder extends Seeder
{
    public function run()
    {
        $arrayCommunes = ['Arica','Camarones','Putre','General Lagos','Iquique','Alto Hospicio','Pozo Almonte','Camiña','Colchane','Huara','Pica'];
        $arrayProvinces = [2,2,3,3,4,4,5,5,5,5,5];
        for ($i=0; $i < count($arrayCommunes); $i++) { 
             DB::table('communes')->insert([
            'name'=> $arrayCommunes[$i],
            'ubication'=>"",
            'province_id'=>$arrayProvinces[$i]
            ]);
        }        
    }
}
