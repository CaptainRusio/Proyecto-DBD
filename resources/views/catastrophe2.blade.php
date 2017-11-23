<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movidosxchile</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
       

       

<body onload="functionRegion()">
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Catastrofe</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="obtener">
                    <input type = "hidden" name = "_token" value="{{ csrf_token()}}">

                    <div>
                        <h3> Datos generales </h3>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Descripcion</label>
                            <textarea class="form-control" rows="3" id="description"></textarea>
                        </div>

                        <div class = "form-group cold-md-4">
                              <label for="sel1">Tipo de catastrofe:</label>
                              <select class="form-control" id="type">
                                <option>Movimiento sismico</option>
                                <option>Tsunami</option>
                                <option>Fenómeno Atmosferico</option>
                                <option>Incendio forestal</option>
                                <option>Incendio local</option>
                                <option>Terremoto</option>
                                <option>Inundación</option>
                                <option>Erupción</option>
                                <option>Hambruna</option>
                                <option>Atentado terrorista</option>
                              </select>
                        </div>
                    </div>
                    <div>
                        <h3> Lugar del suceso </h3>

                        <div class = "form-group cold-md-4">
                              <label for="selReg">Region:</label>
                        
                              <select onclick="functionProvince()" onmouseup="functionProvince()"  class="form-control" id="regionSelect"> 
                                
                               
                            </select>
                           
                        </div>
                        <div class = "form-group cold-md-4">
                              <label for="selProv">Provincia:</label>
                              <select onclick="getCommunes()" onmouseup="functionCommunes()" class="form-control" id="provinceSelect"> </select>
                                
                        </div>

                        <div class = "form-group cold-md-4">
                              <label for="selProv">Comuna:</label>

                              <select class="form-control" id="communeSelect">  </select>
                                
                        </div>
                        
                    </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Ingresar
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<script type="text/javascript">
           function functionRegion(){
                var cuisines= <?php echo json_encode($regions ); ?>;
                var sel = document.getElementById('regionSelect');
                var fragment = document.createDocumentFragment();
                cuisines.forEach(function(cuisine, index) {
                        var opt = document.createElement('option');
                        opt.innerHTML = cuisine.name;
                        opt.value = cuisine.id;
                        fragment.appendChild(opt);
                    });

                sel.appendChild(fragment);


                

                functionProvince();
               
                
           }
           function functionProvince(){
                var sel = document.getElementById('provinceSelect');
                var length = sel.options.length;
                for (i = 0; i < length; i++) {
                  sel.options[i] = null;
                }



                var sel = document.getElementById('regionSelect');
                var strUser = sel.options[sel.selectedIndex].value;
                var provinces = getProvinces(strUser);
                
                
                var fragment = document.createDocumentFragment();
                var sel = document.getElementById('provinceSelect');
                provinces.forEach(function(cuisine, index) {
                    if(index%2 == 0){
                        var opt = document.createElement('option');
                        opt.innerHTML = provinces[index];
                        opt.value = provinces[index+1];
                        fragment.appendChild(opt);
                    }
                   
                });

                sel.appendChild(fragment);

                functionCommunes();

           }

           function getProvinces($id){

                var provinces = <?php echo json_encode($provinces); ?>; 
                var newProvinces = [];
                provinces.forEach(function(valor, index, provinces){
                    if(valor.region_id == $id){
                        newProvinces.push(valor.name);
                        newProvinces.push(valor.id);
                    }
                });
                return newProvinces;

           }

           function functionCommunes(){
                var sel = document.getElementById('communeSelect');
                var length = sel.options.length;
                for (i = 0; i < length; i++) {
                  sel.options[i] = null;
                }



                var sel = document.getElementById('provinceSelect');
                var strUser = sel.options[sel.selectedIndex].value;
                
                var communes = getCommunes(strUser);
                
                var fragment = document.createDocumentFragment();
                var sel = document.getElementById('communeSelect');
                communes.forEach(function(cuisine, index) {
                    var opt = document.createElement('option');
                    opt.innerHTML = cuisine;

                    fragment.appendChild(opt);
                });

                sel.appendChild(fragment);

           }

           function getCommunes($id){
                var communes = <?php echo json_encode($communes); ?>; 

                var newCommunes = [];
                communes.forEach(function(valor, index, communes){

                    if(valor.province_id == $id){
                        newCommunes.push(valor.name);
                    }
                });

                return newCommunes;

           }


           

           


       </script>
</body>
</head>
</html>
