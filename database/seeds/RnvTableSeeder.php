<?php

use Faker\Generator;
use Styde\Seeder\Seeder;

class RnvTableSeeder extends Seeder
{
    protected $total = 1;

    public function getModel()
    {
        return new App\RNV();
    }

    public function getDummyData(Generator $faker, array $custom = [])
    {
        return [
            'name'=>$faker->name
        ];
    }

}