<?php

use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RoleTableSeeder extends Seeder
{
    public function run()
    {

        /*
        type
description
                */
        $arrayNames = ['Organización','Miembro del gobierno','Usuario común','SU'];
        for ($i=0; $i < count($arrayNames); $i++) { 
            
             DB::table('roles')->insert([
                'type' => $arrayNames[$i],
                'description' => 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados.',
            ]);
        }        
    }
}