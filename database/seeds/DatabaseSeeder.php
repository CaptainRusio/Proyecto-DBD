
<?php
 
use Styde\Seeder\BaseSeeder;
 
class DatabaseSeeder extends BaseSeeder
{
    protected $truncate = array(
        'user_record',
        'users',
        //'password_resets',
        'regions',
        'provinces',
        'action_record',
        'communes',
        'rnv',
        'catastrophe_record',
        'actions',
        'catastrophes',
        'roles',
        'users_roles',
        'action_record_catastrophe_record',
        'users_actions',
    );
 
    protected $seeders = array(
        'UserRecord',
        'User',
        'Region',
        'Province',
        'Commune',
        'Rnv',
        'Action',
        'ActionRecord',
        'Catastrophe',
        'CatastropheRecord',
        'Role',
        'User_Role',
        'ActionRecord_CatastropheRecord',
        'User_Action',
    );
}