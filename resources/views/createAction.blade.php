

@extends('layouts.app')
@section('scripts')
		 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css" />
	<script src="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>	

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <style type="text/css">
	.bootstrap-tagsinput {
	    width: 100%;
	}
	.label {
	    line-height: 2 !important;
	}
	</style>

  <script>
  $( function() {
    $( "#dateStart" ).datepicker();
  } );
  </script>

  <script>
  $( function() {
    $( "#dateEnd" ).datepicker();
  } );
  </script>
  <script >
  	function addTags(){
  		$("#divTags").append('<input type="text" class="form-control" id="tokenfield" value="red,green,blue" />');
  	}

  </script>
	<script type="text/javascript">
		function numBox(){
			var selectBox = document.getElementById("progress");
			for (var i = 0; i <= 100; i++) {
				var numOp = document.createElement("option");
				numOp.value = i;
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
			var optHidden = "<input type = \"hidden\" name = \"opt\" value = \""+pro+"\">";
			father.innerHTML += optHidden;
			if (pro == "med-0") {
				//Agregando *Los! tipos de trabajos... arreglar, hacer un select dinámico, que pueda agregar elementos.
					

				father.className += "form-group";

				//Div para input del tipo de trabajo como tag

				var lbl = document.createElement("label");
				lbl.appendChild(document.createTextNode("Tipo de trabajo"));
				lbl.className = "form-label col-md-4";
				var div = document.createElement("div");
				div.className="form-group col-md-8";
				div.id = "divTags";

				father.appendChild(lbl);
				father.appendChild(div);
				
			
				

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
				op1.value = 0
				txtOp1 = document.createTextNode("No iniciado");
				op1.appendChild(txtOp1);
				var op2 = document.createElement("option");
				op2.value = 1;
				txtOp2 = document.createTextNode("En Pausa");
				op2.appendChild(txtOp2);
				var op3 = document.createElement("option");
				op3.value = 2;
				txtOp3 = document.createTextNode("En curso");
				op3.appendChild(txtOp3);

				selectState.appendChild(op1);
				selectState.appendChild(op2);
				selectState.appendChild(op3);


				divSelectState.appendChild(selectState);
				father.appendChild(divSelectState);

				//Número máximo de voluntarios.
				var numMaxlbl = document.createElement("label");
				var numMaxTxt = document.createTextNode("Número máximo de integrantes");
				numMaxlbl.className += "form-label col-md-4";
				numMaxlbl.appendChild(numMaxTxt);

				//div para el input

				var divMax = document.createElement("div");
				divMax.className += "col-md-8";
				var inputMax = document.createElement("Input");
				inputMax.type = "text";
				inputMax.className += "form-control";

				//Se agrega al div
				divMax.appendChild(inputMax);
				//Se agregan al padre
				father.appendChild(numMaxlbl);
				father.appendChild(divMax);
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
				selectState.id = "stateVol2";
				selectState.name = "selectState";
				selectState.className += "form-control";
				//State

				var op1 = document.createElement("option");
				op1.value = 0;
				txtOp1 = document.createTextNode("No iniciado");
				op1.appendChild(txtOp1);
				var op2 = document.createElement("option");
				op2.value = 1;
				txtOp2 = document.createTextNode("En Pausa");
				op2.appendChild(txtOp2);
				var op3 = document.createElement("option");
				op3.value = 2;
				txtOp3 = document.createTextNode("En curso");
				op3.appendChild(txtOp3);

				selectState.appendChild(op1);
				selectState.appendChild(op2);
				selectState.appendChild(op3);


				divSelectState.appendChild(selectState);
				father.appendChild(divSelectState);
			}else if(pro == "med-2"){
				father.className += "form-group";
				var lblDir = document.createElement("label");
				var txtLbl = document.createTextNode("Dirección ");
				//Se agrega el texto al label
				lblDir.className += "form-label col-md-4";
				lblDir.appendChild(txtLbl);
				//Se hace un div para el input
				var divInput = document.createElement("div");
				divInput.className += "col-md-8"
				var dir = document.createElement("input");
				dir.className += "form-control";
				dir.type = "text";
				dir.name = "address";

				divInput.appendChild(dir);
				father.appendChild(lblDir);
				father.appendChild(divInput);

				//Número de voluntarios

				var lblNum = document.createElement("label");
				var txtLbl = document.createTextNode("Número de voluntarios");
				//Se agrega el texto al label
				lblNum.className += "form-label col-md-4";
				lblNum.appendChild(txtLbl);
				//Se hace un div para el input
				var divInputV = document.createElement("div");
				divInputV.className += "col-md-8"
				var dirInptV = document.createElement("input");
				dirInptV.className += "form-control";
				dirInptV.type = "text";
				dirInptV.name = "numV";

				divInputV.appendChild(dirInptV);
				father.appendChild(lblNum);
				father.appendChild(divInputV);

				


			}else if(pro == "med-3"){
					
				var lblGoal = document.createElement("label");
				lblGoal.className += "form-label col-md-4";
				var txtGoal = document.createTextNode("Objetivo ");
				lblGoal.appendChild(txtGoal);
				father.appendChild(lblGoal);

				var divInput = document.createElement("div");
				divInput.className = "col-md-8"
				var inputGoal = document.createElement("input");
				inputGoal.type = "text";
				inputGoal.className += "form-control";
				inputGoal.name = "goal";

				divInput.appendChild(inputGoal);
				father.appendChild(divInput);

				var lblActualAmount = document.createElement("label");
				lblActualAmount.className += "form-label col-md-4";
				var txtActual = document.createTextNode("Monto actual ");
				lblActualAmount.appendChild(txtActual);
				father.appendChild(lblActualAmount);

				var divActualAm = document.createElement("div");
				divActualAm.className = "col-md-8"
				var inputActualAm = document.createElement("input");
				inputActualAm.type = "text";
				inputActualAm.className += "form-control";
				inputActualAm.name = "am";

				divActualAm.appendChild(inputActualAm);
				father.appendChild(divActualAm);

				var lblAnonDon = document.createElement("label");
				lblAnonDon.className += "form-label col-md-4";
				var txtAnonDon = document.createTextNode("Donaciones anonimas ");
				lblAnonDon.appendChild(txtAnonDon);
				father.appendChild(lblAnonDon);

				var divAnonDon = document.createElement("div");
				divAnonDon.className = "col-md-8"
				var inputAnonDon = document.createElement("input");
				inputAnonDon.type = "text";
				inputAnonDon.className += "form-control";
				inputAnonDon.name = "ad";

				divAnonDon.appendChild(inputAnonDon);
				father.appendChild(divAnonDon);


			}
			var btnCrear = document.createElement("input");
				btnCrear.type = "submit";
				btnCrear.className = "btn btn-primary btn-lg col-md-4 col-md-offset-4";
				var txtBtn = document.createTextNode("Ingresar");
				btnCrear.appendChild(txtBtn);
				father.appendChild(btnCrear);
			//document.getElementById("result").innerHTML = form;
		}

	</script>
@endsection


@section('content')
<body onload="numBox()" onchange="addTags()">

	<content>
	
	<div class= "container">
		<div class= "row">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="panel panel-default">

					<div class="panel-heading">Crear medida</div>
				<form method="post" action="refresh	">
					<input type = "hidden" name = "_token" value="{{ csrf_token()}}">
					<input type = "hidden" name = "idCat" value="{{$idCat}}">
					<div class="panel-body" id="panelData">
						
	                        <label for="name" class="col-md-4 control-label">Nombre medida</label>
	                        <div class="col-md-8">
		                        	<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
	                        </div>

	                    	<label for="name" class="col-md-4 control-label">Tipo de medida</label>
	                        
	                        <div class="col-md-8">
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
								<textarea class = "form-control" name = "description" id="txtArea">
								
								</textarea>
							</div>
							
							<label class = "form-label col-md-4" >Progreso a la fecha</label>
							<div class="col-md-8" id="numBox">
								<select class="form-control" name="progress" 
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
							        
							        <input class = "form-control" type="text" name = "start" id="dateStart">

							</div>
							<label class = "form-label col-md-4" >Fecha de termino</label>
							<div class="container col-md-8">
							        <input class = "form-control" type="text" name="end" id="dateEnd">
							</div>
							<label class = "form-label col-md-4" >Ubicacion</label>
							<div class="container col-md-8">
							        <input class = "form-control" type="text" name="ubication" id="ubication">
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
</body>



@endsection



