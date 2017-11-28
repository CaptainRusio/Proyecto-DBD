<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action;
use App\DonationCampaign;
use App\EventToBenefit;
use App\GatheringCenter;
use App\Volunteering;
use Carbon\Carbon;
use App\Catastrophe;

class CreateActionsController extends Controller
{
	public function index(){
		$tiposMedidas = ['Gathering Center','Donaciones','Voluntariado','Evento a beneficio'];
		$data['dataIn'] = $tiposMedidas;
		$data2['dataQuery'] = [];
		return view('createAction');
	}
	public function create(Request $request){
//		var_dump($_REQUEST);
		
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
			$values = "";
			for ($i=0; $i <count($request->multiple) ; $i++) { 
				$values .= ($request->multiple[$i]) . ",";
			}
			print($values);
			$vol->type_of_job = "Basico";
			$vol->status_volunteering = $request->selectState;
			$vol->save();
			$action->action_id = $vol->id;
			$action->action_type = "Volunteering";
			$action->save();
			
		}else if($request->opt == "med-1"){
			//Es Centro de acopio
			$gat = new GatheringCenter();
			$gat->status_gathering_center = $request->statusAc;
			$values = "";
			for ($i=0; $i <count($request->multiple) ; $i++) { 
				$values .= ($request->multiple[$i]) . ",";
			}
			$gat->tipos_de_bienes = $values;
			$gat->save();
			$action->action_id = $gat->id;
			$action->action_type = "GatheringCenter";
			$action->save();
		}else if($request->opt == "med-2"){
			//Es evento a beneficio
			$evt = new EventToBenefit();
			$values = "";
			for ($i=0; $i <count($request->multiple) ; $i++) { 
				$values .= ($request->multiple[$i]) . ",";
			}
			$evt->activities = 	$values;
			$evt->save();
			$action->action_id = $evt->id;
			$action->action_type = "EventToBenefit";
			$action->save();
		}else if($request->opt == "med-3"){
			//Campaña de donación
			$don = new DonationCampaign();
			$don->anonymous_donation = $request->ad;
			$don->goal = $request->goal;
			$don->actual_amount = $request->am;
			$don->save();
			$action->action_id = $don->id;
			$action->action_type = "DonationCampaign";
			$action->save();
		}

		$id = $request->idCat;
		$cat = Catastrophe::find($id); 
	    $actions = $cat->action; 

		return view('actions',compact('actions','id'));
	}
}
