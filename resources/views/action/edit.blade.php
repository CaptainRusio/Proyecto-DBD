@extends('layouts.app')


@section('title')
Edición de Medida
@endsection

@section('scripts')
		 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css" />
	<script src="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>	
    <link rel="stylesheet" href="styles/kendo.common.min.css" />
    <link rel="stylesheet" href="styles/kendo.default.min.css" />
    <link rel="stylesheet" href="styles/kendo.default.mobile.min.css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/kendo.all.min.js"></script>

    <script >
	
$( document ).on( 'click', '.btn-add', function ( event ) {
	event.preventDefault();

	var field = $(this).closest( '.form-group' );
	var field_new = field.clone();

	$(this)
		.toggleClass( 'btn-default' )
		.toggleClass( 'btn-add' )
		.toggleClass( 'btn-danger' )
		.toggleClass( 'btn-remove' )
		.html( '–' );	

	field_new.find( 'input' ).val( '' );
	field_new.insertAfter( field );
} );
$( document ).on( 'click', '.btn-remove', function ( event ) {
	event.preventDefault();
	$(this).closest( '.form-group' ).remove();
} );
	
</script>



  <style type="text/css">
	.bootstrap-tagsinput {
	    width: 100%;
	}
	.label {
	    line-height: 2 !important;
	}
	</style>
<style type="text/css">
	.separ{
		z-index:1;
		margin-bottom: 0.3cm;
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

		function select(){
			var selected =  <?php echo json_encode($action ); ?>;
			var morph =  <?php echo json_encode($morph ); ?>;
			$("#progress").val(selected.progress);
			if(selected.action_type == "Volunteering"){
				act0();
				$("#state").val(morph.status_volunteering);
				$("#medidas").val('med-0');
				//$("#numV").val(morph.);
			}else if(selected.action_type == "GatheringCenter"){
				act1();
				$("#medidas").val('med-1');
			}else if(selected.action_type == "EventToBenefit"){
				act2();
				$("#medidas").val('med-2');
			}else if(selected.action_type == "DonationCampaign"){
				act3();
				$("#montoActual").val(morph.actual_amount);
				$("#objetivo").val(morph.goal);
				$("#medidas").val('med-3');
				$("#donAnon").val(morph.anonymous_donation);
			}
			$("#dinamicBox").append('<input type = "submit" class ="btn btn-primary btn-lg col-md-4 col-md-offset-4 separ" value="Guardar cambios" required>');
		}

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
			select();
		}

	function bienesChan(){
		$("#tipoBien").empty();
		var val = $("#bienes").val();
		if(val == 2){
			$("#tipoBien").append('<label id="specBienlbl" class = "separ form-label col-md-4">Bien específico</label><div  id = "specBien" class = "separ col-md-8"><input type="text" name="specBien" class = "form-control" required></div>');
		}else if(val == 0){
			$("#tipoBien").append('<label class = "separ col-md-4" id = "tipoTrab">Bienes</label>');
			$("#tipoBien").append(
			'<div id = "tipoBien" class="container col-md-8"><div class="row"><div><div class="form-group"><div class="form-group input-group"><input type="text" name="multiple[]" class="form-control" required><span class="input-group-btn"><button type="button" class="btn btn-default btn-add">+</button></span></div></div></div></div></div>');
		}else{
			nobienesChan();
		}
	}
	function nobienesChan(){
		$("#tipoBien").empty();
	}

	function actionSelected(){
		var valor = $("#medidas").val();
    	if(valor == "med-0"){
    		act0();
    	}else if(valor == "med-1"){
    		act1();
    	}else if(valor == "med-2"){
    		act2();
    	}else if(valor == "med-3"){
    		act3();
    	}
    	$("#dinamicBox").append('<input type = "submit" class ="btn btn-primary btn-lg col-md-4 col-md-offset-4 separ" value="Ingresar" required>');

	}
/*

<label class = "separ form-label col-md-4" >Fecha de termino</label>
							<div class="separ col-md-8">
							        <input class = "form-control" type="text" name="end" id="dateEnd">
							</div>
*/
	function act0(){

		//Si es voluntario
		$("#dinamicBox").empty();
		//Tipo de trabajo
		//Input para el tipo de trabajo

		$("#dinamicBox").append('<label class = "separ form-label col-md-4" >Estado</label>');
		var divSel = $('<div class = "separ col-md-8"> </div>');
		var sel = $('<select class="form-control" name="selectState" id = "state"> </select>').appendTo(divSel);
		$('<option value =0>No iniciado </option>').appendTo(sel);
		$('<option value =1>En curso </option>').appendTo(sel);
		$('<option value =2>Finalizado</option>').appendTo(sel);
		$("#dinamicBox").append(divSel);

		$("#dinamicBox").append('<label id=lblCost class = "separ form-label col-md-4">Número máximo de voluntarios</label><div class = "separ col-md-8"><input type="text" name="numV" class = "form-control" required></div>');
		$("#dinamicBox").append('<label class = "separ col-md-4" id = "tipoTrab">Tipo de trabajo</label>');
		$("#dinamicBox").append(
'<div class="container col-md-8"><div class="row"><div><div class="form-group"><div class="form-group input-group"><input type="text" name="multiple[]" class="form-control" required><span class="input-group-btn"><button type="button" class="btn btn-default btn-add">+</button></span></div></div></div></div></div>');
	}

	function act1(){
		//Centro de acopio
		$("#tipoTrabajo").empty();
		$("#dinamicBox").empty();
		var dinBox = $("#dinamicBox");
		$("#tipoTrab").empty();
		$("#tipoTrab").append("Bienes recibidos");
		//Estado
		$("#dinamicBox").append('<label class = "separ form-label col-md-4" >Estado</label>');
		var divSel = $('<div class = "separ col-md-8"> </div>');
		var sel = $('<select onchange ="bienesChan()" class="form-control" name="statusAc" id = "bienes"> </select>').appendTo(divSel);
		$('<option value =0>Se requieren bienes de cualquier tipo </option>').appendTo(sel);
		$('<option value =1>No se requieren bienes </option>').appendTo(sel);
		$('<option id = "op2" value =2>Se requiere un bien en específico</option>').appendTo(sel);
		$("#dinamicBox").append(divSel);

		dibBienes = $('<div id = "tipoBien"> </div>');
		dibBienes.appendTo(dinBox);

	}
	function act2(){
		//Evento a beneficio
		$("#dinamicBox").empty();
		$("#dinamicBox").append('<label class = "separ form-label col-md-4" >Actividades</label>');
		$("#dinamicBox").append(
			'<div id = "actividades" class="container col-md-8"><div class="row"><div><div class="form-group"><div class="form-group input-group"><input type="text" name="multiple[]" class="form-control" required><span class="input-group-btn"><button type="button" class="btn btn-default btn-add">+</button></span></div></div></div></div></div>');
	}
	function act3(){
		//Si es campaña de donación
		$("#dinamicBox").empty();
		//objetivo
		$("#dinamicBox").append('<label id=lblCost class = "separ form-label col-md-4">Objetivo</label><div class = "separ col-md-8"><input id= "objetivo" type="text" name="goal" class = "form-control" required></div>');
		//Monto recaudado a la fecha
		$("#dinamicBox").append('<label id=lblCost class = "separ form-label col-md-4">Monto actual</label><div class = "separ col-md-8"><input id="montoActual" type="text" name="am" class = "form-control" required></div>');
		//Donaciones anónimas
		$("#dinamicBox").append('<label id=lblCost class = "separ form-label col-md-4">Monto donaciones anónimas</label><div class = "separ col-md-8"><input id="donAnon" type="text" name="ad" class = "form-control" required></div>');
		//Empresas asociadas
		$("#dinamicBox").append('<label class = "separ form-label col-md-4" >Empresas asociadas</label>');
		$("#dinamicBox").append(
			'<div id = "actividades" class="container col-md-8"><div class="row"><div><div class="form-group"><div class="form-group input-group"><input type="text" name="multiple[]" class="form-control" required><span class="input-group-btn"><button type="button" class="btn btn-default btn-add">+</button></span></div></div></div></div></div>');
	}

</script>

<script >
	$(function(){
		$("#medidas").change(actionSelected);
	});
</script>
@endsection


@section('content')
	<body onload="numBox()" id = "body">

	<content>
	
	<div class= "container">
		<div class= "row">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="panel panel-default">

					<div class="panel-heading">Crear medida</div>
				<form method="post" action="editAction">
					<input type = "hidden" name = "_token" value="{{ csrf_token()}}">
					<input type = "hidden" name = "idAction" value="{{$action->id}}">
					<div class="panel-body" id="panelData">
						
	                        <label for="name" id = "namelbl" class=" separ col-md-4 control-label">Nombre medida</label>
	                        <div class=" separ col-md-8">
		                        	<input id="name" type="text" class="form-control" name="name" value="{{$action->name}}" required autofocus>
	                        </div>
	                    	<label for="name" class=" separ col-md-4 control-label" required>Tipo de medida</label>
	                        
	                        <div class=" separ col-md-8">
									<select class="form-control" name="opt" 
										id = "medidas"
									>
									<!--onchange="refresh()" -->
										<option value="0" disabled selected>Seleccione Tipo de Medida</option>
                                
										<option value= "med-0">Voluntariado</option>
										<option value= "med-1">Centro de acopio</option>
										<option value= "med-2">Evento a beneficio</option>
										<option value= "med-3">Campaña de donación</option>
									</select>

							</div>

							<label class=" separ col-md-4" 
							id = "lblDescipcion">Descripción</label>
							<div class = "separ col-md-8">
								<textarea class = "form-control" name = "description" id="txtArea" required>
								{{$action->description}}
								</textarea>
							</div>

							<div>
							<label class = "separ form-label col-md-4" >Progreso a la fecha</label>
							<div class="separ col-md-8" id="numBox">
								<select class="form-control" name="progress" 
									id = "progress"
								required>
								</select>
							</div>
							</div>

							<label id=lblCost class = "separ form-label col-md-4">Costo a la fecha</label>
							<div class = "separ col-md-8">
								<input type="text" name="cost" class = "form-control" value="{{$action->cost}}" required>
							</div>
							<label class = "separ form-label col-md-4" >Fecha de inicio</label>
							<div class="separ col-md-8">
							        
							        <input class = "form-control" type="text" name = "start" id="dateStart" value="{{$action->start}}" required>

							</div>
							<label class = "separ form-label col-md-4" >Fecha de termino</label>
							<div class="separ col-md-8">
							        <input class = "form-control" type="text" name="end" id="dateEnd" value="{{$action->end}}" required>
							</div>
							<label class = "separ form-label col-md-4" >Ubicacion</label>
							<div class="separ col-md-8">
							        <input class = "form-control" type="text" name="ubication" id="ubication" value="{{$action->ubication}}" required>
							</div>
							<!-- Para agregar los elementos dinámicamente -->



								<!-- Aqui dentro se agregan los elementos según la medida que elija -->


								<div id ="dinamicBox" >
									
									
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
