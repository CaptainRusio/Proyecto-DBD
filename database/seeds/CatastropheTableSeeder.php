<?php

use Faker\Generator;
use Styde\Seeder\Seeder;

class CatastropheTableSeeder extends Seeder
{
    protected $total = 50;

    public function getModel()
    {
        return new App\Catastrophe();
    }

    public function getDummyData(Generator $faker, array $custom = [])
    {
        return [
            'name'=>$faker->name,
            'catastrophe_record_id'=>$this->random('CatastropheRecord')->id,
            'commune_id'=>$this->random('Commune')->id
        ];
    }

}