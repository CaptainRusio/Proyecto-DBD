
@extends('layouts.app')

@section('title')
Medidas
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

<script >
	$(function(){
		var numActions = {{count($actions)}};
		for (var i = 0; i < numActions; i++) {
			var ida = '#clk'+i;
			var btnSub = '#btnSub'+i;
			$(btnSub).css("display", "none");
		}
	});
</script>

<script>
$(document).ready(function(){
  $('body').on('click', '#formShowAction a', function(){
    var btnClick = '#btnSub'+$(this).attr('id');
    $(btnClick).click();
  })
})


</script>

@endsection



@section('content')

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
				@if(Auth::user() != null)
					@for($i = 0; $i < count(Auth::user()->roles); $i++)
						@if(Auth::user()->roles[$i]->id == 1 || Auth::user()->roles[$i]->id == 2 || Auth::user()->roles[$i]->id == 4)
							<form method="post" action="createAction">
								<input type = "hidden" name = "_token" value="{{ csrf_token()}}"> 
								<button type="submit" class="btn btn-info btn-md btn-block"><span class="glyphicon glyphicon-plus">
								<input type="hidden" name="idCat" value="{{$id}}">
								</span> Añadir Medida</button>
							</form>
							@break
						@endif
					@endfor
				@endif
			</div>
    	</div>
	</div>

    <div class="container">
		<div class="row">
			<div class="[ col-md-12 col-sm-6 ]">
				<ul class="event-list">
					@for($i = 0; $i<count($actions); $i++)
						<li>
							<time datetime="{{$actions[$i]->date}}">
								<span class="day">{{explode('-', $actions[$i]->start, 3)[2]}}</span>
								<span class="month">{{explode('-', $actions[$i]->start, 3)[1]}}</span>
								<span class="year">{{explode('-', $actions[$i]->start, 3)[0]}}</span>
								<span class="time">Tüm Gün</span>
							</time>
							<div class="info">
								<form id = "formShowAction" method="post" action="action" class ="title">
									<input type = "hidden" name = "_token" value="{{ csrf_token()}}"> 
									<a id = "{{$i}}" onclick = "clickForm()" type="submit" class="title"  >{{$actions[$i]->name}} </a>

									<input  type = "hidden" name="actionId" value="{{$actions[$i]->id}}">
									<input type="submit" id = "btnSub{{$i}}" name="btnSub">
								</form>

								<p class="desc">{{$actions[$i]->description}} </p>
							@if(Auth::user() != null)
							<form  method="post" action="actionToUser" > 
			                    <input type = "hidden" name = "_token" value="{{ csrf_token()}}"> 
			                    <input  type = "hidden" name="actions_id"  value="{{$actions[$i]->id}}"> 
			                    	<input  type = "hidden" name="users_id" value="{{ Auth::user()->id }}">
			                    	<button type = "submit" class = "col-md-4 btn btn-info">Participar </button> 
		          			</form> 
		          			@endif

							</div>

							
							<div class="social">
								<ul>
									<li class="edit" style="width:33%;"><a ><span class="fa fa-pencil-square-o"></span></a></li>
									<li class="confirm" style="width:34%;"><a ><span class="fa fa-check"></span></a></li>
									<li class="delete" style="width:33%;"><a ><span class="fa fa-trash-o"></span></a></li>
								</ul>
							</div>

						</li>
					@endfor
				</ul>
			</div>
		</div>
	</div>




@endsection
