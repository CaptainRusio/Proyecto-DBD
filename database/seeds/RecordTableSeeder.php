<?php

use Faker\Generator;
use Styde\Seeder\Seeder;

class RecordTableSeeder extends Seeder
{
    protected $total = 50;

    public function getModel()
    {
        return App\Record();
    }

    public function getDummyData(Generator $faker, array $custom = [])
    {
        return [
            'action' => $faker->text;
        ];
    }

}