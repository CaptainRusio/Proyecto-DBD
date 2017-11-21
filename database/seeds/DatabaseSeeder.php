
<?php
 
use Styde\Seeder\BaseSeeder;
 
class DatabaseSeeder extends BaseSeeder
{
   protected $truncate = array(
        'user_record',
        'rnv',
        'users',
        //'password_resets',
        'regions',
        'provinces',
        'communes',
        'actions',
        'roles',
        'users_roles',
        'users_actions',
        'catastrophes',
    );
 
    protected $seeders = array(
        'UserRecord',
        'Rnv',
        'User',
        'Region',
        'Province',
        'Commune'
        'Role',
        'User_Role',
        'Catastrophe',
        'User_Action',
         --
        /*,  --, --
        ,*/
    );
}