<?php
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class User_ActionTableSeeder extends Seeder
{   
    public function run()
    {

        /*name
                commune_id*/
        for ($i=0; $i < 4; $i++) { 
            
             DB::table('users_actions')->insert([
                'users_id'=> rand(1,3),
                'actions_id' => rand(1,2),
            ]);
        }        
    }
}