<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movidosxchile</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
       

       

<body onload="start()">
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
                var sel = document.getElementById('commune');
                var length = sel.options.length;
                for (i = 0; i < length; i++) {
                  sel.options[i] = null;
                }



                var sel = document.getElementById('provinceSelect');
                var strUser = sel.options[sel.selectedIndex].value;
                
                var communes = getCommunes(strUser);
                
                var fragment = document.createDocumentFragment();
                var sel = document.getElementById('commune');
                communes.forEach(function(cuisine, index) {
                    if(index%2 == 0){
                        var opt = document.createElement('option');
                        opt.innerHTML = communes[index];
                        opt.value = communes[index+1];
                        fragment.appendChild(opt);
                    }
                    
                });

                sel.appendChild(fragment);

           }

           function getCommunes($id){
                var communes = <?php echo json_encode($communes); ?>; 

                var newCommunes = [];
                communes.forEach(function(valor, index, communes){

                    if(valor.province_id == $id){
                        newCommunes.push(valor.name);
                        newCommunes.push(valor.id);
                    }
                });

                return newCommunes;

           }
            function run() {
                document.getElementById("commune_id").value = document.getElementById("commune").value;
            }
            function start(){
                functionRegion();
                run();
            }
       </script>
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Catastrofe</div>

                <div class="panel-body">
    <form class="form-horizontal" action="storeCatastrophe" method="post" >
                    <input type = "hidden" name = "_token" value="{{ csrf_token()}}">

                    <div>
                        <div class="cold-md-3">
                            <h3> Datos generales </h3>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                        
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-md-3 control-label">Descripcion</label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="description" rows="3" id="description" required autofocus></textarea>   
                                {!! $errors->first('description', '<p class="help-block">:message</p>') !!} 
                            </div>
                            
                        </div>

                        <div class = "form-group cold-md-4">
                            <label for="sel1" class="col-md-3 control-label">Tipo de catastrofe:</label>
                            <div class="col-md-6">
                              <select class="form-control" id="type" name = "type">
                                <option>Movimiento sismico</option>
                                <option>Tsunami</option>
                                <option>Fenómeno Atmosferico</option>
                                <option>Incendio forestal</option>
                                <option>Incendio local</option>
                                <option>Terremoto</option>
                                <option>Inundación</option>
                                <option>Erupción</option>
                                <option>Hambruna</option>
                              </select>
                            </div>                            
                        </div>
                    </div>
                    <div>
                        <div class="cold-md-3">
                            <h3> Lugar del suceso </h3>
                        </div>
                        <div class = "form-group cold-md-4">
                            <label for="selReg" class="col-md-3 control-label">Region:</label>
                                <div class="col-md-6">
                                    <select onclick="functionProvince()" onmouseup="functionProvince()"  class="form-control" id="regionSelect"></select>
                                </div>
                        </div>
                        <div class = "form-group cold-md-4">
                            <label for="selProv" class="col-md-3 control-label">Provincia:</label>
                            <div class="col-md-6">
                                <select onclick="getCommunes()" onmouseup="functionCommunes()" class="form-control" id="provinceSelect"> </select>
                            </div>      
                        </div>
                        <div class = "form-group cold-md-4">
                            <label for="selProv" class="col-md-3 control-label">Comuna:</label>
                            <div class="col-md-6">
                                <select onload="run()" class="form-control" name = "commune" id="commune"></select>
                                <input style="display: none;" name = "commune_id" type="text" id="commune_id" placeholder="get value on option select"><br>
                            </div>  
                        </div>  
                    </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar catastrofe
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
</body>
</head>
</html>
