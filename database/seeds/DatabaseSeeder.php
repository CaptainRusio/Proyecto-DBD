
<?php
 
use Styde\Seeder\BaseSeeder;
 
class DatabaseSeeder extends BaseSeeder
{
   protected $truncate = array(
        'user_record',
        'records',
        'rnv',
        'users',
        //'password_resets',
        'regions',
        'donations',
        'provinces',
        'communes',
        'actions',
        'roles',
        'users_roles',
        'users_actions',
        'catastrophes',
    );
 
    protected $seeders = array(
        'Region',
        'Province',
        'Commune',
        'Catastrophe',
        'Rnv',
        'Role',
        'User',
        //'Donation',
        /*'User_Role',
        
        'User_Action',
        'UserRecord',
        'Record',*/
    );
}