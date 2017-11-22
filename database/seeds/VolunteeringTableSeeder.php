<?php

use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class VolunteeringTableSeeder extends Seeder
{
        public function run()
    {

        /*name
                commune_id*/
        
        $types = [0,1,2,3,4];
        for ($i=0; $i < 5; $i++) { 
            
             DB::table('volunteerings')->insert([
                'type_of_job' => types[rand(0,4)] ,
                'time' => rand(0,5),
                'status_volunteering' => rand(0,1),
                'start' => Carbon::parse('2000-01-01'),
                'end' => Carbon::parse('2000-01-01'),
                'cost' => 123,
                'progress' => 50,

            ]);
        }        
    }

}


/*type_of_job
time
status_volunteering
start
end
cost
progress*/