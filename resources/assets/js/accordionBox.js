

function genAccordions(){
			var line = '';
			

			//La idea es hacerlo para cada una de las catastrofes que se encuentran.
			for (var i = 0; i < 10; i++) {
				
				line += 

					  '<div class="panel panel-default">'+
					    '<div class="panel-heading">'+
					  //    '<h4 class="panel-title">'+
					  		'<ul class = "row">'+
						  		'<a class = "col-md-11" data-toggle="collapse" data-parent="#accordion'+i+'" '+
						  		'href="#collapse'+i+'">'+
						  		'Catastrofe'+
						  		'</a>'+
						  		'<button type="button" class=" brt btn btn-primary col-md-1">Ver</button>'+
						  		'</ul>'+


					        /*
							
							    <a class = "col-md-11" data-toggle="collapse" data-parent="#accordioni" href="#collapsei">
							        Catastrofe
							        </a>
							    <button type="button" class=" brt btn btn-primary col-md-1">Ver</button>
							</ul>

					        */
					   //   '</h4>'+
					    '</div>'+
					    '<div id="collapse'+i+'" class="panel-collapse collapse out">'+
					      '<div class="panel-body">'+
					        '<ul class="nav nav-pills nav-stacked">'+
					        	'<li class="passive"><a>Descripcion de la catastrofe '+i+'</a></li>'+
					            '<li class="active ">'+
					            //button type="button" class=" brt btn btn-primary col-md-1"
					            '<button type = "button" class = "btn btn-primary col-md-4">Ver Medidas </button>'+
					            '<button type = "button" class = "btn btn-primary col-md-4">Editar </button>'+
					            '<button type = "button" class = "btn btn-primary col-md-4">Eliminar </button></li>'+
					        '</ul>'+
					      '</div>'+
					    '</div>'+
					  '</div>'
				}
				
				document.getElementById("catastrophes").innerHTML = line;
		}