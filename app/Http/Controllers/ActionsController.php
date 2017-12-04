<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Action;
use App\Catastrophe;

class ActionsController extends Controller
{
    public function index(){
    	//Para mostrar todas las medidas
    	$id = $req->idCat;
    	return view('/actions',compact('id'));
    }
    public function newAction(Request $req)
    {
    	$idCat = $req->idCat;
    	return view('createAction',compact('idCat'));
    }
    public function showActions(Request $req){
        $id = $req->id;
        $cat = Catastrophe::find($id); 
        $actions = $cat->action; 
        return view('actions',compact('actions','id'))->with('message', ""); 
    }
}
