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
		return view('action',compact('action'));
		
	}
	public function showAction(Request $req)
	{
		$actionId = $req->actionId;
		return view('action',compact('actionId'));	
	}
}