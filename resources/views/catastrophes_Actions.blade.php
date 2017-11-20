
<style type="text/css">

 .type{
  background-color: #fafafa;
  margin: 0 auto;
  padding: 1rem;
  /* IMPORTANTE */
  text-align: center;
 }

</style>



@extends('layouts.app')

@section('content')





<!DOCTYPE html>
<html>
<head>
	<title>Catastrophes</title>


	<script type="text/javascript">
		function genAccordions(){
			var line = '';
			for (var i = 0; i < 10; i++) {
				
					line += 

						  '<div class="panel panel-default">'+
						    '<div class="panel-heading">'+
						      '<h4 class="panel-title">'+
						        '<a data-toggle="collapse" data-parent="#accordion'+i+'" href="#collapse'+i+'">'+
						          'Catastrofe '+i+
						        '</a>'+
						      '</h4>'+
						    '</div>'+
						    '<div id="collapse'+i+'" class="panel-collapse collapse out">'+
						      '<div class="panel-body">'+
						        '<ul class="nav nav-pills nav-stacked">'+
						        	'<li class="passive"><a>Descripcion de la catastrofe '+i+'</a></li>'+
						            '<li class="active"><a>Medida '+i+'</a></li>'+
						        '</ul>'+
						                    
						      '</div>'+
						    '</div>'+
						  '</div>'
						  
						

				}
				document.getElementById("catastrophes").innerHTML = line;
		}
	</script>

</head>
<body onload = "genAccordions()">

<section>
	<div class="panel-group" id="catastrophes">

	</div>
</section>
</body>
</html>



@endsection