<?php

use Faker\Generator;
use Styde\Seeder\Seeder;

class RoleTableSeeder extends Seeder
{
    protected $total = 50;

    public function getModel()
    {
        return new App\Role();
    }

    public function getDummyData(Generator $faker, array $custom = [])
    {
        return [
            'type'=>$faker->name,
            'description'=>$faker->text
        ];
    }

}