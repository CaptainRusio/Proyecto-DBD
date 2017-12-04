<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Catastrophe;
use App\Donation;
use App\Action;
use App\DonationCampaign;


class anonymousDonationController extends Controller
{
    public function index(){
        //$pasteles = Pastel::where('sabor','vainilla')->get()
        $campanas = Action::where('action_type','DonationCampaign')->get();
    	return view('donateAnonymous',compact('campanas'));
    }

    public function create(Request $req){
    	
        //active
        $donC = DonationCampaign::find($req->idDonatCamp);
        $action = $donC->actions;

    	if($req->idUser != null){
    		$u = new Donation(); 
            $u->total_amount = $req->amount;
            $u->user_id = $req->idUser;
            $u->donationCampaign_id = $req->idDonatCamp;
            $u->save();
    	}else{
    		$u = new Donation();
            $u->total_amount = $req->amount;
            $u->donationCampaign_id = $req->idDonatCamp;
            $u->save();
    	}
        return view('welcome')->with('message','Se ha donado exitosamente');
    	
    }
}
