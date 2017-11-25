<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateActionsController extends Controller
{
	public function index(){
		$tiposMedidas = ['Gathering Center','Donaciones','Voluntariado','Evento a beneficio'];
		$data['dataIn'] = $tiposMedidas;
		$data2['dataQuery'] = [];
		return view('createAction', $data,$data2);
	}
	public function refresh(Request $request){
		print_r($_REQUEST);
	}
}
