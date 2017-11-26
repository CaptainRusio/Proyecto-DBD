

@extends('layouts.app')

@section('title')
catastrofes
@endsection

@section('scripts')

<style type="text/css">
    body {
		
	}
    
    .event-list {
		list-style: none;
		font-family: 'Lato', sans-serif;
		margin: 0px;
		padding: 0px;
	}
	.event-list > li {
		background-color: rgb(255, 255, 255);
		box-shadow: 0px 0px 5px rgb(51, 51, 51);
		box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);
		padding: 0px;
		margin: 0px 0px 20px;
	}
	.event-list > li > time {
		display: inline-block;
		width: 100%;
		color: rgb(255, 255, 255);
		background-color: rgb(197, 44, 102);
		padding: 5px;
		text-align: center;
		text-transform: uppercase;
	}
	.event-list > li:nth-child(even) > time {
		background-color: rgb(165, 82, 167);
	}
	.event-list > li > time > span {
		display: none;
	}
	.event-list > li > time > .day {
		display: block;
		font-size: 40pt;
		font-weight: 100;
		line-height: 1;
	}
	.event-list > li time > .month {
		display: block;
		font-size: 18pt;
		font-weight: 500;
		line-height: 1;
	}
	.event-list > li time > .year {
		display: block;
		font-size: 24pt;
		font-weight: 500;
		line-height: 1;
	}
	.event-list > li > img {
		width: 100%;
	}
	.event-list > li > .info {
		padding-top: 5px;
		text-align: center;
	}
	.event-list > li > .info > .title {
		font-size: 17pt;
		font-weight: 700;
		margin: 0px;
	}
	.event-list > li > .info > .desc {
		font-size: 13pt;
		font-weight: 300;
		margin: 0px;
	}
	.event-list > li > .info > ul,
	.event-list > li > .social > ul {
		display: table;
		list-style: none;
		margin: 10px 0px 0px;
		padding: 0px;
		width: 100%;
		text-align: center;
		
	}
	.event-list > li > .social > ul {
		margin: 0px;
	}
	.event-list > li > .info > ul > li,
	.event-list > li > .social > ul > li {
		display: table-cell;
		cursor: pointer;
		color: rgb(30, 30, 30);
		font-size: 11pt;
		font-weight: 300;
        padding: 3px 0px;
	}
    .event-list > li > .info > ul > li > a {
		display: block;
		width: 100%;
		color: rgb(30, 30, 30);
		text-decoration: none;
	} 
    .event-list > li > .social > ul > li {    
        padding: 0px;
    }
    .event-list > li > .social > ul > li > a {
        padding: 3px 0px;
	} 
	.event-list > li > .info > ul > li:hover,
	.event-list > li > .social > ul > li:hover {
		color: rgb(30, 30, 30);
		background-color: rgb(200, 200, 200);
	}
	.edit a,
	.confirm a,
	.delete a {
		display: block;
		width: 100%;
		color: rgb(75, 110, 168) !important;
	}
	.confirm a {
		color: rgb(79, 213, 248) !important;
	}
	.delete a {
		color: rgb(221, 75, 57) !important;
	}
	.edit:hover a {
		color: rgb(255, 255, 255) !important;
		background-color: rgb(75, 110, 168) !important;
	}
	.confirm:hover a {
		color: rgb(255, 255, 255) !important;
		background-color: rgb(79, 213, 248) !important;
	}
	.delete:hover a {
		color: rgb(255, 255, 255) !important;
		background-color: rgb(221, 75, 57) !important;
	}

	@media (min-width: 768px) {
		.event-list > li {
			position: relative;
			display: block;
			width: 100%;
			height: 120px;
			padding: 0px;
		}
		.event-list > li > time,
		.event-list > li > img  {
			display: inline-block;
		}
		.event-list > li > time,
		.event-list > li > img {
			width: 120px;
			float: left;
		}
		.event-list > li > .info {
			background-color: rgb(245, 245, 245);
			overflow: hidden;
		}
		.event-list > li > time,
		.event-list > li > img {
			width: 120px;
			height: 120px;
			padding: 0px;
			margin: 0px;
		}
		.event-list > li > .info {
			position: relative;
			height: 120px;
			text-align: left;
			padding-right: 40px;
		}	
		.event-list > li > .info > .title, 
		.event-list > li > .info > .desc {
			padding: 0px 10px;
		}
		.event-list > li > .info > ul {
			position: absolute;
			left: 0px;
			bottom: 0px;
		}
		.event-list > li > .social {
			position: absolute;
			top: 0px;
			right: 0px;
			display: block;
			width: 40px;
		}
        .event-list > li > .social > ul {
            border-left: 1px solid rgb(230, 230, 230);
        }
		.event-list > li > .social > ul > li {			
			display: block;
            padding: 0px;
		}
		.event-list > li > .social > ul > li > a {
			display: block;
			width: 40px;
			padding: 10px 0px 9px;
		}
	}

</style>
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
@endsection






@section('content')

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
				<a href="{{url('/catastrophe2')}}" class="btn btn-info btn-md btn-block"><span class="glyphicon glyphicon-plus">
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
			        <li class="active ">
			        <form class="" method="post" action="actionsOf" > 
                        <input type = "hidden" name = "_token" value="{{ csrf_token()}}"> 
                        <input type="hidden" name="id" value="{{$catastrophes[$i]->id}}"> 
                        <button type = "submit" class = "col-md-4 btn btn-info" 
                            id = "{{$catastrophes[$i]->id}}" 
                        >Ver Medidas </button> 
          			</form> 
			        <button class = "col-md-4 btn btn-info">Editar </button>
			        <button class = "col-md-4 btn btn-info">Eliminar </button></
			        li>
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