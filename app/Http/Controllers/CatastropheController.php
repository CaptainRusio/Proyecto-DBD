<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catastrophe;
use Validator;
use App\Region;
use App\Province;
use App\Commune;

class CatastropheController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
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

        Catastrophe::create($request->all());
        return redirect()->route('/')->with('success', true)->with('message','Se ha ingresado la catastrofe exitosamente');
    }

    public function create()
    {
        $regions = Region::all();
        $provinces = Province::all();
        $communes = Commune::all();
        return view('catastrophe2', compact('regions','provinces','communes'));
    }

    public function show()
    {   
        //
        
    }

    public function edit()
    {
    }

    public function update()
    {

    
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
        return view('catastrophe2',  compact('regions','provinces','communes'));
    }

}