<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nueva medida</title>
        <!-- Fonts -->
        
		  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		  <script>
		  $( function() {
		    $( "#datepicker" ).datepicker();
		  } );
		  </script>
		
	<script type="text/javascript">
		function numBox(){
			var selectBox = document.getElementById("progress");
			for (var i = 0; i <= 100; i++) {
				var numOp = document.createElement("option");
				numOp.value = i;
				console.log(i);
				var txtOp = document.createTextNode(i+" %");
				numOp.appendChild(txtOp);
				selectBox.appendChild(numOp);
			}
		}

		function refresh() {

			var idSelect = document.getElementById("medidas");
			var pro = idSelect.options[idSelect.selectedIndex].value;
			var father = document.getElementById("dinamicBox"); //Se obtiene el Form para establecer
			//Los camfather
			father.innerHTML = '';
			if (pro == "med-0") {
				//Agregando *Los! tipos de trabajos... arreglar, hacer un select dinámico, que pueda agregar elementos.
				
				father.className += "form-group";
				varTipoVol = document.createElement("label");
				varTipoVol.className += "form-label col-md-4 ";
				var txtTipo = document.createTextNode("Tipo");
				varTipoVol.appendChild(txtTipo);
				father.appendChild(varTipoVol);

				//Div para input del tipo de voluntariado
				var divInput = document.createElement("div");
				divInput.className += "col-md-8";
				//Input del tipo.
				var inputVol = document.createElement("input");
				inputVol.type = "text";
				inputVol.name = "workType";
				inputVol.className += "form-control";
				//Se agregan los valores
				divInput.appendChild(inputVol);
				father.appendChild(divInput);
				//Fin tipo de voluntariado.

				//Inicio Estado del voluntariado.

				//Label del voluntariado.
				var lblState = document.createElement("label");
				lblState.className += "col-md-4 ";
				//Texto del lbl
				var txtState = document.createTextNode("Estado ");
				lblState.appendChild(txtState);
				father.appendChild(lblState);
				var divSelectState = document.createElement("div");
				divSelectState.className +="col-md-8";
				//Select
				var selectState = document.createElement("select");
				selectState.id = "stateVol";
				selectState.name = "selectState";
				selectState.className += "form-control";
				//State

				var op1 = document.createElement("option");
				op1.value = "noIniciado"
				txtOp1 = document.createTextNode("No iniciado");
				op1.appendChild(txtOp1);
				var op2 = document.createElement("option");
				op2.value = "En pausa";
				txtOp2 = document.createTextNode("En Pausa");
				op2.appendChild(txtOp2);
				var op3 = document.createElement("option");
				op3.value = "En curso";
				txtOp3 = document.createTextNode("En curso");
				op3.appendChild(txtOp3);

				selectState.appendChild(op1);
				selectState.appendChild(op2);
				selectState.appendChild(op3);


				divSelectState.appendChild(selectState);
				father.appendChild(divSelectState);

				//Fin de selección de estado.

				//
				//Boton Submit para ir al post




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
				father.className += "form-group";
				var lblState = document.createElement("label");
				lblState.className += "col-md-4 ";
				//Texto del lbl
				var txtState = document.createTextNode("Estado ");
				lblState.appendChild(txtState);
				father.appendChild(lblState);
				var divSelectState = document.createElement("div");
				divSelectState.className +="col-md-8";
				//Select
				var selectState = document.createElement("select");
				selectState.id = "stateVol";
				selectState.name = "selectState";
				selectState.className += "form-control";
				//State

				var op1 = document.createElement("option");
				op1.value = "noIniciado"
				txtOp1 = document.createTextNode("No iniciado");
				op1.appendChild(txtOp1);
				var op2 = document.createElement("option");
				op2.value = "En pausa";
				txtOp2 = document.createTextNode("En Pausa");
				op2.appendChild(txtOp2);
				var op3 = document.createElement("option");
				op3.value = "En curso";
				txtOp3 = document.createTextNode("En curso");
				op3.appendChild(txtOp3);

				selectState.appendChild(op1);
				selectState.appendChild(op2);
				selectState.appendChild(op3);


				divSelectState.appendChild(selectState);
				father.appendChild(divSelectState);
			}else if(pro == "med-2"){
				
					
			}else if(pro == "med-3"){
					
			}
			var btnCrear = document.createElement("input");
				btnCrear.type = "submit";
				var txtBtn = document.createTextNode("Ingresar");
				btnCrear.appendChild(txtBtn);
				father.appendChild(btnCrear);
			//document.getElementById("result").innerHTML = form;
		}

	</script>

</head>


<body  onload="numBox()">
@extends('layouts.app')

@section('content')
	<content>
	
	<div class= "container">
		<div class= "row">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="panel panel-default">

					<div class="panel-heading">Crear medida</div>
				<form method="post" action="refresh">
					<div class="panel-body" id="panelData">
						
	                        <label for="name" class="col-md-4 control-label">Nombre medida</label>
	                        <div class="col-md-8">
		                        	<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
	                        </div>

	                    	<label for="name" class="col-md-4 control-label">Tipo de medida</label>
	                        
	                        <div class="col-md-8">
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

							</div>

							<label class="col-md-4" 
							id = "lblDescipcion">Descripción</label>
							<div class = "col-md-8">
								<textarea class = "form-control" name = "descripcion" id="txtArea">
								
								</textarea>
							</div>
							
							<label class = "form-label col-md-4" >Progreso a la fecha</label>
							<div class="col-md-8" id="numBox">
								<select class="form-control" name="progressBox" 
									id = "progress" 
								>
								</select>
							</div>

							<label id=lblCost class = "form-label col-md-4">Costo a la fecha</label>
							<div class = "col-md-8">
								<input type="text" name="cost" class = "form-control" value="Ingrese un monto en pesos (CLP)">
							</div>
							<label class = "form-label col-md-4" >Fecha de inicio</label>
							<div class="container col-md-8">
							        
							        <p>Date: <input type="text" id="datepicker"></p>

							</div>
							<label class = "form-label col-md-4" >Fecha de termino</label>
							<div class="container col-md-8">
							        <div class="form-group">
							            <div class='input-group date' id='datetimepicker8'>
							                <input type='text' class="form-control" />
							                <span class="input-group-addon">
							                    <span class="fa fa-calendar">
							                    </span>
							                </span>
							            </div>
							        
							    </div>
							</div>

							<!-- Para agregar los elementos dinámicamente -->
							<div id = "dinamicBox" >
								<!-- Aqui dentro se agregan los elementos según la medida que elija -->



							</div>
					</div>
					</form >

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
@endsection
 <script type="text/javascript">
							        $(function () {
							            $('#datetimepicker8').datetimepicker({
							                icons: {
							                    time: "fa fa-clock-o",
							                    date: "fa fa-calendar",
							                    up: "fa fa-arrow-up",
							                    down: "fa fa-arrow-down"
							                }
							            });
							        });
							    </script>
</html>


