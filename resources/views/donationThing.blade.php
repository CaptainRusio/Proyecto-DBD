@extends('layouts.app')


@section('scripts')

 
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
 
    
<script>
            $( document ).ready(function() {
                $('#fecha').datepicker();
            });
        </script>
        <script >
            function setCat(){
                 $("#catName").empty();
                var campanas = <?php echo json_encode($campanas); ?>;
                @for($i = 0; $i<count($campanas); $i++)
                    if(campanas[{{$i}}].id == $("#selectDonac").val()){
                        $("#catName").append('{{$campanas[$i]->catastrophes->name}}');
                    }
                @endfor
                $("#btn").empty();
                $("#btn").append('<input type = "submit" class="col-md-12 btn btn-primary" value = "Dona aquí" role="button">');
            }
            function setCatInit(){
                $("#catName").empty();
                var campanas = <?php echo json_encode($campanas); ?>;
                if(campanas != null){
                    $("#catName").append('{{$campanas[0]->catastrophes->name}}');
                }
            }

            $(function () {
                $("#catName").empty();
                var campanas = <?php echo json_encode($campanas); ?>;
                if(campanas != null){
                    $("#catName").append('{{$campanas[0]->catastrophes->name}}');
                }
            });


        </script>


@endsection



@section('content')


<content>
	<div class= "container">
		<div class= "row">

			<div class="col-md-6 col-md-offset-3">
				
				<div class="panel panel-default">

					<div class="panel-heading">Donación de recursos</div>

                    <form method="post" action="createDonBien">
                        <input type = "hidden" name = "_token" value="{{ csrf_token()}}"> 

					   <div class="panel-body">

                        <label for="name" class="col-md-4 control-label" >Nombre del recurso</label>
                        <div class="col-md-6">
                        	<input id="name" type="text" class="form-control" name="nameBien" required autofocus>
                        </div>
                        @if(Auth::user() != null)
                        <input type="hidden" name="idUser" value = "{{Auth::user()->id}}">
                        @endif

					<label for="name" class="col-md-4 control-label">Número de bienes</label>
					
					<div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="num" required autofocus>
                        </div>
                        <label for="name" class="col-md-4 control-label">Campaña</label>
                        
                        <div class="col-md-6" >
                            
                            <select class="form-control" name="idDonatCamp" id = "selectDonac" onchange = "setCat()"  required>
                                <option value="0" disabled selected>Seleccione la campaña de donación</option>
                                @for($i = 0; $i < count($campanas); $i++)
                                    @if($campanas[$i]->activate == 1)
                                        <option value = "{{$campanas[$i]->action_id}}" >{{$campanas[$i]->name}}</option>
                                    @endif
                                @endfor
                                <!--<option value= "#cac">Centro de acopio</option>
                                <option value= "#vol">Voluntariado</option>
                                <option value= "#benf">Evento a Beneficio</option>
                                <option value= "#don">Donación</option>-->

                            
                            </select>                                   
                        </div>


                        <label for="name" class="col-md-4 control-label">Catastrofe a la que pertenece</label>
                        <label for="name" class="col-md-8 control-label" id="catName"></label>
				<div id="btn"></div>
				</div>

			</div>
            </form>
			
			
		</div>
	</div>
</content>



@endsection
