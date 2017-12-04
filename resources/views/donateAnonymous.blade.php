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

					<div class="panel-heading">Dona de forma anónima</div>

                    <form method="post" action="createDonac">
                        <input type = "hidden" name = "_token" value="{{ csrf_token()}}"> 
					   <div class="panel-body">
                        <label for="name" class="col-md-4 control-label" >Monto (CLP)</label>
                        <div class="col-md-6">
                        	<input id="name" type="text" class="form-control" name="amount" required autofocus>
                        </div>
                        @if(Auth::user() != null)
                        <input type="hidden" name="idUser" value = "{{Auth::user()->id}}">
                        @endif
                    	<label for="name" class="col-md-4 control-label">Campaña</label>
                        
                        <div class="col-md-6" >
							
							<select class="form-control" name="idDonatCamp" id = "selectDonac" onchange = "setCat()"  required>
								<option value="0" disabled selected>Seleccione la campaña de donación</option>
                                @for($i = 0; $i < count($campanas); $i++)
								    <option value = "{{$campanas[$i]->id}}" >{{$campanas[$i]->name}}</option>
                                @endfor
								<!--<option value= "#cac">Centro de acopio</option>
								<option value= "#vol">Voluntariado</option>
								<option value= "#benf">Evento a Beneficio</option>
								<option value= "#don">Donación</option>-->

							
							</select>									
						</div>

					<label for="name" class="col-md-4 control-label">Fecha donación</label>
					
					<div class="form-group row" >
                        <div class="col-md-6">
                            <div class="input-group date" data-provide="datepicker" align="center">
                                <input type="text" class="form-control" name="donationDate" align="center" required>
                                <div class="input-group-addon" align="center">
                                    <span class="glyphicon glyphicon-th"  align= "center"></span>
                                </div>
                            </div>
                            @if ($errors->has('start_date'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('start_date') }}</strong>
                                </span>
                            @endif
                        </div>
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
