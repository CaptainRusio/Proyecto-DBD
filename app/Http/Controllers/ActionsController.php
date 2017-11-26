<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Action;

class ActionsController extends Controller
{
    public function index(Request $req){
    	//Para mostrar todas las medidas
    	$id = $req->idCat;
    	return view('/actions',compact('idCat'));
    }
    public function newAction(Request $req)
    {
    	$idCat = $req->idCat;
    	return view('createAction',compact('idCat'));
    }
}
