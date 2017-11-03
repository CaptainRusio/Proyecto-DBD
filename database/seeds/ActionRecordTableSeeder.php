<?php

use Faker\Generator;
use Styde\Seeder\Seeder;

class ActionRecordTableSeeder extends Seeder
{
    protected $total = 50;

    public function getModel()
    {
        return new App\ActionRecord();
    }

    public function getDummyData(Generator $faker, array $custom = [])
    {
        return [
            'name' => $faker->name,
            'date_start' => $faker->date,
            'date_end' => $faker->date,
            'cost' => $faker->randomDigit,
            'progress' => $faker->randomDigit,
        ];
    }

}