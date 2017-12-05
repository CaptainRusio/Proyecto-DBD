<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GatheringCenter;
use App\Action;
use App\Article;
class DonateThingsController extends Controller
{
    public function index()
    {
    	$morph = GatheringCenter::all();
    	$campanas = Action::where('action_type','GatheringCenter')->get();
    	return view('donationThing',compact('campanas','morph'));
    }
    public function store(Request $req){
    	$art = new Article();
    	$art->name = $req->nameBien;
		$art->number = $req->num;
		$art->gathering_id = $req->idDonatCamp;
		$art->save();

    	return ("Funciona!");
    }
}
