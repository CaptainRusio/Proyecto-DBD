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
            ]);
        }       

        //Super user.
        $u = User::create([
                'name'=> 'root',
                'email' => 'root@all.com',
                'password' => Hash::make('root123'),
                'rnv_id' => $rnv[rand(0,2)],
            ]);
        $u->roles()->attach(1);
        $u->roles()->attach(2);
        $u->roles()->attach(3);
        $u->roles()->attach(4);

    }

}