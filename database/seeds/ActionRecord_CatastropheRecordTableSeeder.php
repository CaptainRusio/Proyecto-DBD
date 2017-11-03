<?php

use Faker\Generator;
use Styde\Seeder\Seeder;

class ActionRecord_CatastropheRecordTableSeeder extends Seeder
{
    protected $total = 50;

    public function getModel()
    {
        return new App\ActionRecord_CatastropheRecord();
    }

    public function getDummyData(Generator $faker, array $custom = [])
    {
        return [
            'action_record_id' => $this->random('ActionRecord')->id,
            'catastrophe_record_id'=>$this->random('CatastropheRecord')->id
        ];
    }

}