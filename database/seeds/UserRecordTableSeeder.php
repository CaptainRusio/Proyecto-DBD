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
            'id_user' => $this->random('User')->id,
            'id_record' => $this->random('Record')->id,
        ];
    }

}