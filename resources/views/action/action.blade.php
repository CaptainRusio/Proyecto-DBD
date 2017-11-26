<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">




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
								<option value= "#cac">Centro de acopio</option>
								<option value= "#vol">Voluntariado</option>
								<option value= "#benf">Evento a Beneficio</option>
								<option value= "#don">Donación</option>
							
							</select>									
						</div>

					<label for="name" class="col-md-4 control-label">Fecha inicio</label>
					
					<div class="form-group row" >
                        <div class="col-md-6">
                            <div class="input-group date" data-provide="datepicker" align="center">
                                <input type="text" class="form-control" name="start_date" align="center">
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
						
				
				</div>

			</div>
			
			
		</div>
	</div>



</content>

<head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
    </head>


    <head>
        <script>
            $( document ).ready(function() {
                $('#fecha').datepicker();
            });
        </script>
    </head>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/user/newCatastrophe.js"></script>

@endsection
