<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catastrophe;
use Validator;
use App\Region;
use App\Province;
use App\Commune;
use App\User;
use App\Record;
use Thujohn\Twitter\Facades\Twitter;


class CatastropheController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),
            [
            'name' => 'required|string|max:32',
            'description' => 'required|string|max:256',
            ],
        [
            'required' => 'Es necesario completar este campo',
            'string' => 'Ingrese caracteres',
            'max' => 'Se ha exedido la cantidad maxima'
        ]
            );
        if($validator->fails())
        {
            return redirect()->route('catastrophe2')
                                    ->withErrors($validator)
                                    ->withInput();
        }

        $cat = Catastrophe::all()->where('name', $request->name);
        if(count($cat) == 0){
            Catastrophe::create($request->all());
        
            $User = User::Find($request->users_id);

            $reco = record::create([
                'action' => "Crea catastrofe ".$request->name,
            ]);
            $User->records()->save($reco);
            return view('welcome')->with('message', "catSuccess");
            
        } else {
            return view('welcome')->with('message', "catNoSuccess");
            
        }
        
        

    }

    public function create()
    {
        $regions = Region::all();
        $provinces = Province::all();
        $communes = Commune::all();
        $catastrophe = "noEdit";
        return view('catastrophe2', compact('regions','provinces','communes','catastrophe'));
    }

    public function show(Request $req)
    {   
        $idCat = $req->id;
        $catastrophe = Catastrophe::find($idCat);
        if($catastrophe != null){
            return view('Catastrophe',compact('catastrophe'));
        }else{
            print('Catastrofe nula');    
        }
        
    }

    public function edit(Request $req)
    {
        $idCat = $req->id;
        $catastrophe = Catastrophe::find($idCat);
        
        $idCommune = $catastrophe->commune_id;
        $actualCommune = Commune::find($idCommune);
        
        $idProvince = $actualCommune->province_id;
        $actualProvince = Province::find($idProvince);
        
        $idRegion = $actualProvince->region_id;
        $actualRegion = Region::find($idRegion);

        $regions = Region::all();
        $provinces = Province::all();
        $communes = Commune::all();
        
        return view('catastrophe2', compact('actualRegion','actualProvince','actualCommune','regions','provinces','communes','catastrophe'));

    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
            'name' => 'required|string|max:32',
            'description' => 'required|string|max:256',
            ],
        [
            'required' => 'Es necesario completar este campo',
            'string' => 'Ingrese caracteres',
            'max' => 'Se ha exedido la cantidad maxima'
        ]
            );
        if($validator->fails())
        {
            return redirect()->route('catastrophe2')
                                    ->withErrors($validator)
                                    ->withInput();
        }


      

        $catastrophe = Catastrophe::find($request->catId);
        
        $User = User::Find($request->users_id);

        if($catastrophe->name == $request->name and $catastrophe->description == $request->description and
            $catastrophe->type == $request->type and $catastrophe->commune_id == $request->commune_id){

        }else{
            if($catastrophe->name == $request->name){
                $reco = record::create([
                    'action' => "Modifica catastrofe ".$catastrophe->name,
                ]);

            }else{
                $reco = record::create([
                    'action' => "Modifica catastrofe ".$catastrophe->name." a la catastrophe ".$request->name,
                ]);

            }
        
            $User->records()->save($reco);
        }

        
    

        $catastrophe->name = $request->name;
        $catastrophe->description = $request->description;
        $catastrophe->type = $request->type;
        $catastrophe->commune_id = $request->commune_id;
        

        $catastrophe->save();

        return view('welcome');
       
    }

    public function bloquear(Request $request)
    {
      

        $catastrophe = Catastrophe::find($request->catId);
        
        $User = User::Find($request->users_id);

       
        $reco = Record::create([
            'action' => "Bloquea catastrofe ".$catastrophe->name,
        ]);

            
        
        $User->records()->save($reco);
        
        $catastrophe->name = "*".$catastrophe->name."*";
        $catastrophe->active = false;
        $catastrophe->save();

        return view('welcome')->with('message', "");
       
    }



    public function destroy()
    {
    }

    public function select($id)
    {
        return Province::where('region_id',$id)->get();
    }


    public function prueba()
    {
     
        $regions = Region::all();
        $provinces = Province::all();
        $communes = Commune::all();
        $catastrophe = "noEdit";
        return view('catastrophe2',  compact('regions','provinces','communes','catastrophe'));
    }

    public function publishTwitter(Request $request){

        $idCat = $request->id;
        $cat = Catastrophe::find($idCat);
        $strToTweet = "";
        $strToTweet .= $cat->name . "\n";
        $strToTweet .= $cat->description ."\n";
        $strToTweet .= $cat->type . "\n";
        //Se cambia la catastrofe.
        $cat->confirmed = true;
        $cat->save();

        //Se postea el twitter

        //return Twitter::postTweet(['status' => $strToTweet, 'format' => 'json']);
    }

}