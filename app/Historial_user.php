<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Historial de usuario
class Historial_user extends Model
{
	//id historial
    Public $id_historial;
    //Fecha accion
   	Public $date_action;
   	//Descripcion
   	Public $description;
}
