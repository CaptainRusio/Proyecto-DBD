
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
        'user_action_record',
        'action_record_catastrophe_record',
        'actions',
        'catastrophes',
        'roles',
        'users_roles',
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
        'User_ActionRecord',
        'ActionRecord_CatastropheRecord',
        'Catastrophe',
        'CatastropheRecord',
        'Role',
        'User_Role',

    );
}