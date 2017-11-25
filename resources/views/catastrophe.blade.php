<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movidosxchile</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
       

<body>
@extends('layouts.app')

@section('content')

<!--
<script type="text/javascript">
    var regionsJS = [
        @foreach ($regions as $region)
            {"id":"{{$region->id}}","name":"{{$region->name}}"},
        @endforeach
        {}
    ]
    var provincesJS = [
        @foreach ($provinces as $province)
            {"id":"{{$province->id}}","name":"{{$province->name}}","region_id":"{{$province->region_id}}"},
        @endforeach
        {}
    ]
    var communesJS = [
        @foreach ($provinces->communes as $commune)
            {"id":"{{$commune->id}}","name":"{{$commune->name}}","province_id":"{{$commune->province_id}}"},
        @endforeach
        {}
    ]

    function region (){
        for ( i = 0; i < regionsJS.length-1 ; i ++){
            $("#region").append("<option value = "+regionsJS[i].id+">"+regionsJS[i].name+"</option>");
        }
    }

    function province(){
        var region_id = $("#region").val();
        alert(region_id);
        for(i = 0; i < provincesJS.length-1; i++){
            if (region_id == provincesJS[i].region_id) {
                $("#province").append("<option value = "+provincesJS[i].id+">"+provincesJS[i].name+"</option>");
            }
        }
    }
    function commune(){
        var province_id = $("#province").val();
        alert(province_id);
        for(i = 0; i < communesJS.length-1; i++){
            if (province_id == communesJS[i].province_id) {
                $("#commune").append("<option value = "+communesJS[i].id+">"+communesJS[i].name+"</option>");
            }
        }
    }
    $(document).ready(function(){
        region();
 //  $("#region").bind().change(province());
       $("#region").attr('onchange','province()');
        $("#province").attr('onchange','commune()');
    });
</script>
-->



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Catastrofe</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="{{ url('/catastrophe') }}">
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
                              <select class="form-control" id="select-region" >
                            </select>
                        </div>
                        <div class = "form-group cold-md-4">
                              <label for="selProv">Provincia:</label>
                              <select class="form-control" id="select-province"></select>
                        </div>
                        <div class = "form-group cold-md-4">
                              <label for="selCom">Comuna:</label>
                              <select class="form-control" id="select-commune"></select>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src = "js/dinamic/select.js"></script>
@endsection
</body>
</head>
</html>
