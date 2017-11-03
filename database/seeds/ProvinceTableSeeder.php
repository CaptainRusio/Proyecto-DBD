<?php

use Faker\Generator;
use Styde\Seeder\Seeder;

class ProvinceTableSeeder extends Seeder
{
    protected $total = 50;

    public function getModel()
    {
        return new App\Province();
    }

    public function getDummyData(Generator $faker, array $custom = [])
    {
        return [
            'name'=>$faker->name,
            'governor'=>$faker->name,
            'region_id'=>   $this->random('Region')->id
        ];
    }

}