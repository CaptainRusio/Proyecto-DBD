<?php

use Faker\Generator;
use Styde\Seeder\Seeder;

class DonationCampaignTableSeeder extends Seeder
{
    protected $total = 50;

    public function getModel()
    {
        return new App\DonationCampaign();
    }

    public function getDummyData(Generator $faker, array $custom = [])
    {
        return [
            //
        ];
    }

}