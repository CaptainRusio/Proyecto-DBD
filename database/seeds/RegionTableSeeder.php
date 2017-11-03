<?php

use Faker\Generator;
use Styde\Seeder\Seeder;

class RegionTableSeeder extends Seeder
{
    protected $total = 50;

    public function getModel()
    {
        return new App\Region();
    }

    public function getDummyData(Generator $faker, array $custom = [])
    {
        return [
            'name' => $faker->name
        ];
    }

}