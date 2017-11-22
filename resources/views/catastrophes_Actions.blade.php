
<style type="text/css">

 .type{
  margin: 10px;
  padding: 0px 40px 0px 40px;
  /* IMPORTANTE */
  text-align: center;
 }
.valInit{
	vertical-align: middle;
}
.esp{
	border-collapse: separate;
	border-spacing: 2px;
}
</style>



@extends('layouts.app')

@section('content')




<!DOCTYPE html>
<html>
<head>
	<title>Catastrophes</title>	



</head>
<body  >

<section>	
	<div class = "container"> 
		 <div class="row">
		 	<div class="valInit col-md-6 ">
	            <form action="" class="search-form">
	                <div class="form-group has-feedback">
	            		<label for="search" class="sr-only">Search</label>
	            		<input type="text" class="form-control" name="search" id="search" placeholder="search">
	              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
	            	</div>
	            </form>
	        </div>
			<div class="col-md-6 ">
				<a href="{{url('catastrophe')}}" class="btn btn-info btn-md btn-block"><span class="glyphicon glyphicon-plus">
				</span> Añadir catastrofe</a>
			</div>
    	</div>
	</div>

<div class="panel-group type" id="catastrophes">
	@for ($i =0; $i<count($catastrophes); $i++)

		<div class="panel-group type" id="catastrophes" >
	<div class="panel panel-default">
	    <div class="panel-heading">
			<h4 class="panel-title">
			   	<ul>
			   		<ul class = "row">
					    <a class = "col-md-11" data-toggle="collapse" data-parent="#accordion{{$i}}" href="#collapse{{$i}}">
					        {{$catastrophes[$i]->name}}
					        </a>
					    <button type="button" class=" brt btn btn-primary col-md-1">Ver</button>
					</ul>
				</ul>
			</h4>
		</div>
		<div id="collapse{{$i}}" class="panel-collapse collapse out">
			<div class="panel-body">
			    <ul class="nav nav-pills nav-stacked">

			       	<li class="passive"><a>Comuna: {{$catastrophes[$i]->commune->name}} <br> 
			       		Provincia: {{$catastrophes[$i]->commune->province->name}} <br> 
			       		Region: {{$catastrophes[$i]->commune->province->region->name}}
			       	</a></li>
			        <li class="active "><button class = "col-md-4 btn btn-info">Ver Medidas </button>
			        <button class = "col-md-4 btn btn-info">Editar </button>
			        <button class = "col-md-4 btn btn-info">Eliminar </button></li>
			    </ul>				                    
			</div>
		</div>
	</div>
</div>


	@endfor
		
</div>


</section>
</body>
</html>



@endsection