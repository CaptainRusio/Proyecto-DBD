<?php

use Faker\Generator;
use Styde\Seeder\Seeder;

class UserRecordTableSeeder extends Seeder
{
    protected $total = 50;

    public function getModel()
    {
        return new App\UserRecord();
    }

    public function getDummyData(Generator $faker, array $custom = [])
    {
        return [
            'name' => $faker->name,
            'action_date'=>$faker->date,
            'description'=>$faker->text
        ];
    }

}