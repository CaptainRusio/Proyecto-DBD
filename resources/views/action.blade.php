
<title> Medida </title>
@extends('layouts.app')

@section('content')
<h1 align ="center">Medidas</h1>

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
							
							<select class="form-control" name="Tipo de medida">
								
								<option>Ver medidas</option>
								<option value= "#">Centro de acopio</option>
								<option value= "#">Voluntariado</option>
								<option value= "#">Evento a Beneficio</option>
								<option value= "#">Donación</option>
							
							</select>
					  </div>
					
						@if()


					</div>
				
				</div>

			</div>
			
			
		</div>
	</div>
</content>


@endsection