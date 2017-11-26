<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Action;

class ActionsController extends Controller
{
    public function index(){
    	//Para mostrar todas las medidas
    	$actions = Action::All();
    	return view('/actions',compact('actions'));
    }
}
