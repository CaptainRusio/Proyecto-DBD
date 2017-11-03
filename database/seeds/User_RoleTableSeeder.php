<?php

use Faker\Generator;
use Styde\Seeder\Seeder;

class User_RoleTableSeeder extends Seeder
{
    protected $total = 50;

    public function getModel()
    {
        return new App\User_Role();
    }

    public function getDummyData(Generator $faker, array $custom = [])
    {
        return [
            'users_id'=>$this->random('User')->id,
            'roles_id'=>$this->random('Role')->id
        ];
    }

}