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
        $actions = ['Terremoto','Diluvio'];
        $arrComunes = [1,2,3];
        for ($i=0; $i < count($actions); $i++) { 
            
             DB::table('actions')->insert([
                'name'=> $actions[$i],
                'description' => "Todos lo mismo",
            ]);
        }        
    }
}