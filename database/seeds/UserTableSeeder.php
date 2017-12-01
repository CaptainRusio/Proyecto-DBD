<?php

use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class UserTableSeeder extends Seeder
{
   public function run()
    {

        /*name
                commune_id*/
        $names = ['Hola','Lobezno','Zolezzi','tioInfo1'];
        $passwords = Hash::make('123123');
        $email = ['hola@gmail.com','lobezno@live.cl','zolezzi@loa.cl','tioInfo@usach.cl'];
        $rnv = [0,1,2];
        for ($i=0; $i < count($names); $i++) { 
            
             DB::table('users')->insert([
                'name'=> $names[$i],
                'email' => $email[$i],
                'password' => $passwords,
                'rnv_id' => $rnv[rand(0,2)],
                'active' => 1,
            ]);
        }       

        //Super user.
        $u = User::create([
                'name'=> 'root',
                'email' => 'root@all.com',
                'password' => Hash::make('root123'),
                'rnv_id' => $rnv[rand(0,2)],
                'active' => 1,
            ]);
        $u->roles()->attach(1);
        $u->roles()->attach(2);
        $u->roles()->attach(3);
        $u->roles()->attach(4);

        //Organización

        $u = User::create([
                'name'=> 'org',
                'email' => 'org@all.com',
                'password' => Hash::make('root123'),
                'rnv_id' => $rnv[rand(0,2)],
                'active' => 1,
            ]);
        $u->roles()->attach(1);

        //Gobierno
        $u = User::create([
                'name'=> 'gov',
                'email' => 'gov@all.com',
                'password' => Hash::make('root123'),
                'rnv_id' => $rnv[rand(0,2)],
                'active' => 1,
            ]);
        $u->roles()->attach(2);

        //Usuario común
        $u = User::create([
                'name'=> 'com',
                'email' => 'com@all.com',
                'password' => Hash::make('root123'),
                'rnv_id' => $rnv[rand(0,2)],
                'active' => 1,
            ]);
        $u->roles()->attach(3);

        //SU
        $u = User::create([
                'name'=> 'su',
                'email' => 'su@all.com',
                'password' => Hash::make('root123'),
                'rnv_id' => $rnv[rand(0,2)],
                'active' => 1,
            ]);
        $u->roles()->attach(3);

    }

}