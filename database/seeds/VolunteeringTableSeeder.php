<?php

use Illuminate\Database\Seeder;

class VolunteeringTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*name
                commune_id*/
        
        for ($i=0; $i < 10; $i++) { 
            
             DB::table('volunteerings')->insert([
                'type_of_job' => 1,
				
				'status_volunteering' => rand(0,1),
            ]);
        }        
    }
}
