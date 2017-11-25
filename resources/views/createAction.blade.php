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
			var form = "";
			var idSelect = document.getElementById("medidas");
			var pro = idSelect.options[idSelect.selectedIndex].value;
			if (pro == "med-1") {
				form += '<label for="name" class="col-md-4 control-label">Descripción</label>'+
						'<div class="col-md-6">'+
		                '<input id="name" type="text" class="form-control" '+'name="name" value="{{ old('name') }}" required autofocus>'+
		            	'</div>';


			}else if(pro == "med-2"){


			}else if(pro == "med-3"){

			}else if(pro == "med-4"){

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
							<form method="POST" action="refresh">
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
					  		</div>
					  		<div > 
								<form id= "result">
									<label for="name" class="col-md-4 control-label">Descripción</label>
									<div class="col-md-6">
		                			<textarea id="name" type="text" class="form-control" name="name"				 value="{{ old('name') }}" required autofocus>
		            				</textarea>

									
								</form>




							</div>
						</div>

				</div>

			</div>
			
			
		</div>
	</div>
</content>

<!--
	<form method="POST" action="refresh">
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