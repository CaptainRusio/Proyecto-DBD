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
			var father = document.getElementById("dinamicBox"); //Se obtiene el Form para establecer
			//Los camfather
			if (pro == "med-0") {
				//Agregando *Los! tipos de trabajos... arreglar, hacer un select dinámico, que pueda agregar elementos.
				father.innerHTML = '';
				father.className += "form-group col";
				varTipoVol = document.createElement("label");
				varTipoVol.className += "form-group col-md-4 ";
				var txtTipo = document.createTextNode("Tipo");
				varTipoVol.appendChild(txtTipo);
				father.appendChild(varTipoVol);

				//Div para input del tipo de voluntariado
				var divInput = document.createElement("div");
				divInput.className += "col-md-8";
				//Input del tipo.
				var inputVol = document.createElement("input");
				inputVol.type = "text";
				inputVol.className += "form-control";
				//Se agregan los valores
				divInput.appendChild(inputVol);
				father.appendChild(divInput);
				//Fin tipo de voluntariado.

				//Inicio Estado del voluntariado.

				//Label del voluntariado.
				var lblState = document.createElement("label");
				lblState.className += "form-group col-md-4 ";
				//Texto del lbl
				var txtState = document.createTextNode("Estado ");
				lblState.appendChild(txtState);
				father.appendChild(lblState);
				var divSelectState = document.createElement("div");
				divSelectState.className +="col-md-8";
				//Select
				var selectState = document.createElement("select");
				selectState.id = "stateVol";
				selectState.className += "form-control";
				//States
				var op1 = document.createElement("option");
				txtOp1 = document.createTextNode("No iniciado");
				op1.appendChild(txtOp1);
				var op2 = document.createElement("option");
				txtOp2 = document.createTextNode("En Pausa");
				op2.appendChild(txtOp2);
				var op3 = document.createElement("option");
				txtOp3 = document.createTextNode("En curso");
				op3.appendChild(txtOp3);

				selectState.appendChild(op1);
				selectState.appendChild(op2);
				selectState.appendChild(op3);

				divSelectState.appendChild(selectState);
				father.appendChild(divSelectState);

				//Fin de selección de estado.

				//


				/*
				var div0 = document.createElement("div");
				div0.className += "form-group";
				var div0_lbl0 = document.createElement("label");
				div0_lbl0.className += "col-md-4";
				var lbl0_text = document.createTextNode("Tipo de trabajo: ");
				var div0_input0 = document.createElement("input");
				div0_input0.className += "col-md-8";
				div0_lbl0.appendChild(lbl0_text);
				div0.appendChild(div0_lbl0);
				div0.appendChild(div0_input0);
				father.appendChild(div0);*/
				//Fin tipos de trabajos.

			}else if(pro == "med-1"){
				
			}else if(pro == "med-2"){
					
			}else if(pro == "med-3"){
					
			}

			//document.getElementById("result").innerHTML = form;
		}



	</script>

</head>
<body>
	<content>
	
	<div class= "container">
		<div class= "row">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="panel panel-default">

					<div class="panel-heading">Crear medida</div>

					<div class="panel-body" id="panelData">
						
	                        <label for="name" class="col-md-4 control-label">Nombre medida</label>
	                        <div class="col-md-8">
		                        <form method="fatherT" action="refresh">
		                        	<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
		                        </form>
	                        </div>

	                    	<label for="name" class="col-md-4 control-label">Tipo de medida</label>
	                        
	                        <div class="col-md-8">
									<input type = "hidden" name = "_token" value="{{ csrf_token()}}">
									<select class="form-control" name="Tipo de medida" 
										id = "medidas"
										form = "refresh"
										onchange="refresh()" 
									>
										<option value= "med-0">Voluntariado</option>
										<option value= "med-1">Centro de acopio</option>
										<option value= "med-2">Evento a beneficio</option>
										<option value= "med-3">Campaña de donación</option>
									</select>

							</div>

							<label class="col-md-4" 
							id = "lblDescipcion">Descripción</label>
							<textarea class = "col-md-8" name = "descripcion" id="txtArea" form = "refresh">
							Describa la Medida
							</textarea>


							<!-- Para agregar los elementos dinámicamente -->
							<div id = "dinamicBox" >
								<!-- Aqui dentro se agregan los elementos según la medida que elija -->



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