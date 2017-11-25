<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

@extends('layouts.app')

@section('content')




<!DOCTYPE html>
<html>
<head>
	<title>Nueva medida</title>

	<script type="text/javascript">
		function refresh() {
			

			var idSelect = document.getElementById("medidas");
			var pro = idSelect.options[idSelect.selectedIndex].value;
			var father = document.getElementById("result"); //Se obtiene el Form para establecer
			//Los camfather
			if (pro == "med-0") {
				father.innerHTML = '';
				//Agregando *Los! tipos de trabajos... arreglar, hacer un select dinámico, que pueda agregar elementos.
				var div0 = document.createElement("div");
				div0.className += "form-group";
				var div0_lbl0 = document.createElement("label");
				div0_lbl0.className += "col-md-4";
				var lbl0_text = document.createTextNode("Tipo de trabajo: ");
				var div0_input0 = document.createElement("input");
				div0_input0.className += "col-md-6";
				div0_lbl0.appendChild(lbl0_text);
				div0.appendChild(div0_lbl0);
				div0.appendChild(div0_input0);
				father.appendChild(div0);
				//Fin tipos de trabajos.

				//Tiempo de Inicio.
				var div1 = document.createElement("div");
				


			}else if(pro == "med-1"){
				father.innerHTML = '';
				var fragment = document.createDocumentFragment();
				var div = document.createElement("div");
				var c = document.createTextNode("Holaa");
				div.appendChild(c);
				fragment.appendChild(div);
				father.appendChild(fragment);
			}else if(pro == "med-2"){
					father.innerHTML = '';
			}else if(pro == "med-3"){
					father.innerHTML = '';
			}

			//document.getElementById("result").innerHTML = form;
		}



	</script>

</head>
<body>
	<content>
	
	<div class= "container">
		<div class= "row">
			<div class="col-md-6 col-md-offset-3">
				
				<div class="panel panel-default">

					<div class="panel-heading">Crear medida</div>

					<div class="panel-body">
                        <label for="name" class="col-md-4 control-label">Nombre medida</label>
                        <div class="col-md-6">
                        	<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        </div>

                    	<label for="name" class="col-md-4 control-label">Tipo de medida</label>
                        
                        <div class="col-md-6">
							<form method="fatherT" action="refresh">
								<input type = "hidden" name = "_token" value="{{ csrf_token()}}">
								<select class="form-control" name="Tipo de medida" 
									id = "medidas"
									onchange="refresh()" 
								>
									<option value= "med-0">Voluntariado</option>
									<option value= "med-1">Centro de acopio</option>
									<option value= "med-2">Evento a beneficio</option>
									<option value= "med-3">Campaña de donación</option>
								</select>

								</form>
					  		<div id = "result"> 

							</div>
							</div>
						</div>

				</div>

			</div>
			
			
		</div>
	</div>
</content>

<!--
	<form method="fatherT" action="refresh">
		<input type = "hidden" name = "_token" value="{{ csrf_token()}}">

		<label>Tipo de medida: </label>
		<select id="selectMedida" name="selectMed">
		@if(!is_null($dataIn))
			@for ($i = 0; $i<count($dataIn); $i++)	
				<option value= "med-{{$i}}">{{$dataIn[$i]}}</option>
			@endfor
		@endif
		</select>
		<input type = "submit"  name = "Medidas:" id = "btnAceptar" value = "selectMedida"/>

		@if(!is_null($dataQuery))
			@if($dataQuery == "med-1")
				<h1>Lo logramos! </h1>
			@endif
		@endif

	</form>
	-->

</body>
</html>



@endsection