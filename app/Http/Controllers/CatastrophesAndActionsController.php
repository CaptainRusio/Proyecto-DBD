<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Catastrophe;

class CatastrophesAndActionsController extends Controller
{
    public function showCatastrophes(){
    	$catastrophes = Catastrophe::all();

    	return view('catastrophes_Actions',compact('catastrophes'));
    }
}
