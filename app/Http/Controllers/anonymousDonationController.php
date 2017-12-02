<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Catastrophe;
use App\Donation;
use App\Action;


class anonymousDonationController extends Controller
{
    public function index(){
        //$pasteles = Pastel::where('sabor','vainilla')->get()
        $campanas = Action::where('action_type','DonationCampaign')->get();
    	return view('donateAnonymous',compact('campanas'));
    }

    public function create(Request $req){
    	
    	if($req->idUser != null){
    		$u = Donation::create([
            'total_amount' => $req->amount,
            'user_id' => $req->idUser,
            'donationCampaign_id' => $req->idDonatCamp,
        ]);	
    	}else{
    		$u = Donation::create([
            'total_amount' => $req->amount,
            'donationCampaign_id' => $req->idDonatCamp,
        ]);
    	}
        return view('welcome');
    	
    }
}
