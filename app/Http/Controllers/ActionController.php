<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Action;
use App\Volunteering;
use App\DonationCampaign;
use App\GatheringCenter;
use App\EventToBenefit;

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
	public function showAction(Request $req)
	{
		$actionId = $req->actionId;
		return view('action',compact('actionId'));	
	}
}