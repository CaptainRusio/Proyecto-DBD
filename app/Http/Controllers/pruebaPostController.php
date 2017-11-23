<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pruebaPostController extends Controller
{
    public function validates(Request $request){
    	return var_dump($request->edad);
    }
}
