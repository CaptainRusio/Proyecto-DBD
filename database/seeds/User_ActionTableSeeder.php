<?php

use Faker\Generator;
use Styde\Seeder\Seeder;

class User_ActionTableSeeder extends Seeder
{
    protected $total = 50;

    public function getModel()
    {
        return new App\Users_Actions();
    }

    public function getDummyData(Generator $faker, array $custom = [])
    {
        return [
            'users_id'=>$this->random('User')->id,
            'actions_id'=>$this->random('Action')->id
        ];
    }

}