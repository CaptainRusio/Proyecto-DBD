
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
        'volunteerings',
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
        'Volunteering',
        //'Donation',
        /*'User_Role',
        
        'User_Action',
        'UserRecord',
        'Record',*/
    );
}