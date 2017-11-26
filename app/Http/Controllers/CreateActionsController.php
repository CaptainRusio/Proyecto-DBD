<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action;
use App\DonationCampaign;
use App\EventToBenefit;
use App\GatheringCenter;
use App\Volunteering;
use Carbon\Carbon;

class CreateActionsController extends Controller
{
	public function index(){
		$tiposMedidas = ['Gathering Center','Donaciones','Voluntariado','Evento a beneficio'];
		$data['dataIn'] = $tiposMedidas;
		$data2['dataQuery'] = [];
		return view('createAction');
	}
	public function refresh(Request $request){
		
		//Valores generales
		$action = new Action();
		$action->name = $request->name;

		$action->progress = $request->progress;
		$action->cost = $request->cost;
		$action->start = Carbon::parse( $request->start);
		$action->end = Carbon::parse( $request->end);
		$action->description = $request->description;
		$action->catastrophe_id = $request->idCat;
		$action->ubication = $request->ubication;
		if($request->opt == "med-0"){
			//Es voluntariado
			$vol = new Volunteering();
			$vol->type_of_job = "Basico";
			$vol->status_volunteering = $request->selectState;
			$vol->save();
			$action->action_id = $vol->id;
			$action->action_type = "Volunteering";
			$action->save();
			
		}else if($request->opt == "med-1"){
			//Es Centro de acopio
			$gat = new GatheringCenter();
			$gat->status_gathering_center = $request->selectState;
			if($request->selectState == "No iniciado"){
				$gat->status_gathering_center = 0;
			}else if($request->selectState == "En Pausa"){
				$gat->status_gathering_center = 1;
			}else if($request->selectState == "En curso"){
				$gat->status_gathering_center = 2;
			}

			$gat->save();
			$action->action_id = $gat->id;
			$action->action_type = "GatheringCenter";
			$action->save();
		}else if($request->opt == "med-2"){
			//Es evento a beneficio
		}else if($request->opt == "med-3"){
			//Es campaña de donación
		}
	}
}
