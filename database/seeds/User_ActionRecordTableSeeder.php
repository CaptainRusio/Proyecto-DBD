<?php

use Faker\Generator;
use Styde\Seeder\Seeder;

class User_ActionRecordTableSeeder extends Seeder
{
    protected $total = 50;

    public function getModel()
    {
        return new App\User_ActionRecord();
    }

    public function getDummyData(Generator $faker, array $custom = [])
    {
        return [
            'users_id' => $this->random('User')->id,
            'action_record_id' => $this->random('ActionRecord')->id
        ];
    }

}