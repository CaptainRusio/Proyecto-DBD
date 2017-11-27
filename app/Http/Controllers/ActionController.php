<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action;

/**
* 
*/
class ActionController extends Controller
{
	
	public function index(Request $req)
	{
		$actionId = $req->actionId;
		$action = Action::find($actionId);
		return view('action',compact('action'));
	}
	public function showAction(Request $req)
	{
		$actionId = $req->actionId;
		return view('action',compact('actionId'));	
	}
}