
<?php
 
use Styde\Seeder\BaseSeeder;
use App\User;
class DatabaseSeeder extends BaseSeeder
{
    
    /* ORDEN
    'Volunteering',
        'Region',
        'Province',
        'Commune',
        'Catastrophe',
        'Rnv',
        'Role',
        'User',
        'Action',
        'DonationCampaign',
        'User_Action',
        'Donation',

    */
        function run(){

            //Voluntariado
            for ($i=0; $i < 10; $i++) { 
                
                 DB::table('volunteerings')->insert([
                    'type_of_job' => 1,
                    
                    'status_volunteering' => rand(0,1),
                ]);
            }        
            //Region
            $arrayRegion = ['Arica y Parinacota','Tarapacá'];
            for ($i=0; $i < count($arrayRegion); $i++) { 
                 DB::table('regions')->insert([
                'name'=> $arrayRegion[$i],
                'ubication'=>""
                ]);
            }      

            //Provincia
            $arrayProvinces = ['Arica','Parinacota','Iquique','Tamarugal','Antofagasta'];
            $arrayRegion = [1,1,2,2,1];
            $arrayGovernor = ['Ricardo Sanzana Oteiza','Roberto Lau Suárez','Francisco Pinto','Rubén Moraga Mamaní','Gabriel Toro'];
            for ($i=0; $i < count($arrayProvinces); $i++) { 
                 DB::table('provinces')->insert([
                'name'=> $arrayProvinces[$i],
                'ubication'=>"",
                'region_id'=>$arrayRegion[$i],
                'governor'=>$arrayGovernor[$i]
                ]);
            }        


            //Comuna
            $arrayCommunes = ['Arica','Camarones','Putre','General Lagos','Iquique','Alto Hospicio','Pozo Almonte','Camiña','Colchane','Huara','Pica'];
                $arrayProvinces = [1,1,2,2,3,3,4,4,5,5,5,5,5];
                for ($i=0; $i < count($arrayCommunes); $i++) { 
                     DB::table('communes')->insert([
                    'name'=> $arrayCommunes[$i],
                    'ubication'=>"",
                    'province_id'=>$arrayProvinces[$i]
                    ]);
                }        

            //Catastrofe 
                $arrayTypes = ['Terremoto','Inundación'];
                $arrayDescriptions = ['Gran terremoto que asoto a la zona de Valparaiso.','Inundaciones en toda la tierra de Chiloe, producote del diluvio, se necesitan voluntarios.'];
                $arrComunes = [1,2,3];
                for ($i=0; $i < count($arrayTypes); $i++) { 
                    
                     DB::table('catastrophes')->insert([
                        'name'=> $arrayTypes[$i],
                        'description' => $arrayDescriptions[$i],
                        'type' => $arrayTypes[$i],
                        'commune_id' => $arrComunes[$i],
                    ]);
                }       

            // RNV
                $arrayNames = ['RegistroCocineros','RegistroConductores','RegistroConstructores'];
                $arrTypeJobs = [0,1,2,3,4];
                $arrID = [0,1,2,3,4,5];
                for ($i=0; $i < count($arrayNames); $i++) { 
                    
                     DB::table('rnv')->insert([
                        'id' => $arrID[$i],
                        'name' => $arrayNames[$i],
                        'type_of_job' => $arrTypeJobs[$i],
                    ]);
                }        

            //Role
                $arrayNames = ['Organización','Miembro del gobierno','Usuario común','SU'];
                for ($i=0; $i < count($arrayNames); $i++) { 
                    
                     DB::table('roles')->insert([
                        'type' => $arrayNames[$i],
                        'description' => 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados.',
                    ]);
                }        

            //User
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

        $u = User::create([
                'name'=> 'incognito',
                'email' => 'incognito@all.com',
                'password' => Hash::make('root123'),
                'rnv_id' => $rnv[rand(0,2)],
                'active' => 1,
            ]);
        $u->roles()->attach(1);


            //Action
        

            //DonationCampaign
    
            //User_Action


            
        }

}