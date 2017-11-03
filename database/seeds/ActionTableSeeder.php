<?php

use Faker\Generator;
use Styde\Seeder\Seeder;

class ActionTableSeeder extends Seeder
{
    protected $total = 50;

    public function getModel()
    {
        return new App\Action();
    }

    public function getDummyData(Generator $faker, array $custom = [])
    {
        return [
            'name' => $faker->name,
            'description'=> $faker->text,
            'action_user_id' => $this->random('User')->id,
            'action_rnv_id' => $this->random('Rnv')->id,
            'action_record_id' => $this->random('ActionRecord')->id
        ];
    }

}