<?php

use Faker\Generator;
use Styde\Seeder\Seeder;

class UserTableSeeder extends Seeder
{
    protected $total = 50;

    public function getModel()
    {
        return new App\User();
    }

    public function getDummyData(Generator $faker, array $custom = [])
    {
        return [
            'name' => $faker->name,
            'email' => $faker->email,
            'password'=> bcrypt('secret'),
            'record_id'=>   $this->random('UserRecord')->id,
            'rnv_id'=>$this->random('Rnv')->id

            
            
        ];
    }

}