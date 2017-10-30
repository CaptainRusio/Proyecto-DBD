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

    public function mostrar(
    ){
        $data = prueba::all();
        echo $data;
        return view('pruebaBaseDatosVista');
    }
     protected function create()
    {
        return pruebaBaseDatos::create([
            'nombre' => 'prueba',
            'rut' => 'email',
        ]);
        /*
        $nombre = "nombreDePrueba";
        $rut = "rutDePrueba";

        $data = array('nombre'=>$nombre,'rut'=>$rut);         
        
        DB::table('pruebaBaseDatos')->insert($data); 
    */
    }
         
}
