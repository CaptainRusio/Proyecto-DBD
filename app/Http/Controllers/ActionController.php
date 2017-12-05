<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Action;
use App\Volunteering;
use App\DonationCampaign;
use App\GatheringCenter;
use App\EventToBenefit;
use Carbon\Carbon;

/**
* 
*/
class ActionController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    
    }
	
	public function index(Request $req)
	{
		$actionId = $req->actionId;
		$action = Action::find($actionId);
		if($action->action_type == "DonationCampaign"){
			$morph = DonationCampaign::find($action->action_id);
		}else if($action->action_type == "Volunteering"){
			$morph = Volunteering::find($action->action_id);
		}else if($action->action_type == "EventToBenefit"){
			$morph = EventToBenefit::find($action->action_id);
		}else if($action->action_type == "GatheringCenter"){
			$morph = GatheringCenter::find($action->action_id);
		}
		return view('action',compact('action','morph'));
		
	}
	public function edit($id){
		$action = Action::find($id);
		if($action->action_type == "DonationCampaign"){
			$morph = DonationCampaign::find($action->action_id);
		}else if($action->action_type == "Volunteering"){
			$morph = Volunteering::find($action->action_id);
		}else if($action->action_type == "EventToBenefit"){
			$morph = EventToBenefit::find($action->action_id);
		}else if($action->action_type == "GatheringCenter"){
			$morph = GatheringCenter::find($action->action_id);
		}
		return view('action.edit',compact('action','morph'));	
	}	
	public function storeEdit(Request $request){
		
		$action = Action::find($request->idAction);

		$action->name = $request->name;

		$action->progress = $request->progress;
		$action->cost = $request->cost;
		$action->start = Carbon::parse( $request->start);
		$action->end = Carbon::parse( $request->end);
		$action->description = $request->description;
		$action->ubication = $request->ubication;


		if($action->action_type == "DonationCampaign"){
			$morph = DonationCampaign::find($action->action_id);



			$morph->anonymous_donation = $request->ad;
			$morph->goal = $request->goal;
			$morph->actual_amount = $request->am;
			$morph->save();


		}else if($action->action_type == "Volunteering"){
			$morph = Volunteering::find($action->action_id);

			for ($i=0; $i <count($request->multiple) ; $i++) { 
				$values .= ($request->multiple[$i]) . ",";
			}
			$morph->type_of_job = $values;
			$morph->status_volunteering = $request->selectState;
			$morph->save();




		}else if($action->action_type == "EventToBenefit"){
			$morph = EventToBenefit::find($action->action_id);

			$values = "";
			for ($i=0; $i <count($request->multiple) ; $i++) { 
				$values .= ($request->multiple[$i]) . ",";
			}
			$morph->activities = $values;
			$morph->save();



		}else if($action->action_type == "GatheringCenter"){
			$morph = GatheringCenter::find($action->action_id);

			$morph->status_gathering_center = $request->statusAc;
			$values = "";
			for ($i=0; $i <count($request->multiple) ; $i++) { 
				$values .= ($request->multiple[$i]) . ",";
			}
			$morph->tipos_de_bienes = $values;
			$morph->save();
		}
			$action->save();
		return ("funciona!");

	}

	public function showAction(Request $req)
	{
		$actionId = $req->actionId;
		return view('action',compact('actionId'));	
	}

	 public function update(Request $request, $id)
    {
        $action = Action::find($id);
        $action->activate = 1;
        $action->save();
        return redirect()->route('catastrophesAndActions');
    }
	/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $action = Action::find($id);
        $action->delete();
        dd($id);
        return redirect()->route('catastrophesAndActions');
    }
}