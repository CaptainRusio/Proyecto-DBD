<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\pruebaBaseDatos as prueba;
use Illuminate\Http\Request;
use DB;

class pruebaBaseDatos extends Controller
{

    public function guardar(Request $req){
        $prueba = new prueba;
        $prueba->nombre = $req->input('nombre');
        $prueba->rut = $req->input('rut');
        $prueba->save();
        
    }

    public function consultaWhere(Request $req){
        $data['datosConsulta'] = DB::table('pruebaBaseDatos')->where('nombre', '=', $req->input('nombre'))->get();
        $data2['datos'] = [];
        
        return view('pruebaBaseDatosVista',$data, $data2);
        
    }  

    public function mostrar(){
        $data ['datos'] = prueba::all();
        $data2['datosConsulta'] = [];
        return view('pruebaBaseDatosVista',$data, $data2);
    }
     protected function create()
    {
        
        /*
        $nombre = "nombreDePrueba";
        $rut = "rutDePrueba";

        $data = array('nombre'=>$nombre,'rut'=>$rut);         
        
        DB::table('pruebaBaseDatos')->insert($data); 
    */
    }
         
}
