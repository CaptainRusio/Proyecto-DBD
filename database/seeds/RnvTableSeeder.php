<?php

use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RnvTableSeeder extends Seeder
{
    
    public function run()
    {

        /*name
                commune_id*/
        $arrayNames = ['RegistroCocineros','RegistroConductores','RegistroConstructores'];
        $arrTypeJobs = [0,1,2,3,4];
        $arrID = [0,1,2,3,4,5];
        for ($i=0; $i < count($arrayNames); $i++) { 
            
             DB::table('rnv')->insert([
                'id' => $arrID[$i],
                'name' => $arrayNames[$i],
                'type_of_job' => $arrTypeJobs[$i],
            ]);
        }        
    }

}
