@extends('layouts.app')



@section('title')
Catastrophe
@endsection


@section('scripts')

<style>
.page-header{
  text-align: center;    
}
@import url(http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);

/*social buttons*/
.btn-social{
  color: white;
  opacity:0.9;
}
.btn-social:hover {
  color: white;
    opacity:1;
}
.btn-facebook {
background-color: #3b5998;
opacity:0.9;
}
.btn-twitter {
background-color: #00aced;
opacity:0.9;
}
.btn-linkedin {
background-color:#0e76a8;
opacity:0.9;
}
.btn-github{
  background-color:#000000;
  opacity:0.9;
}
.btn-google {
  background-color: #c32f10;
  opacity: 0.9;
}
.btn-stackoverflow{
  background-color: #D38B28;
  opacity: 0.9;
}

/* resume stuff */

.bs-callout {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #eee;
    border-image: none;
    border-radius: 3px;
    border-style: solid;
    border-width: 1px 1px 1px 5px;
    margin-bottom: 5px;
    padding: 20px;
}
.bs-callout:last-child {
    margin-bottom: 0px;
}
.bs-callout h4 {
    margin-bottom: 10px;
    margin-top: 0;
}

.bs-callout-danger {
    border-left-color: #678BCC;
}

.bs-callout-danger h4{
    color: #678BCC;
}

.resume .list-group-item:first-child, .resume .list-group-item:last-child{
  border-radius:0;
}

/*makes an anchor inactive(not clickable)*/
.inactive-link {
   pointer-events: none;
   cursor: default;
}

.resume-heading .social-btns{
  margin-top:15px;
}
.resume-heading .social-btns i.fa{
  margin-left:-5px;
}



@media (max-width: 992px) {
  .resume-heading .social-btn-holder{
    padding:5px;
  }
}


/* skill meter in resume. copy pasted from http://bootsnipp.com/snippets/featured/progress-bar-meter */

.progress-bar {
    text-align: left;
	white-space: nowrap;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	cursor: pointer;
}

.progress-bar > .progress-type {
	padding-left: 10px;
}

.progress-meter {
	min-height: 15px;
	border-bottom: 2px solid rgb(160, 160, 160);
  margin-bottom: 15px;
}

.progress-meter > .meter {
	position: relative;
	float: left;
	min-height: 15px;
	border-width: 0px;
	border-style: solid;
	border-color: rgb(160, 160, 160);
}

.progress-meter > .meter-left {
	border-left-width: 2px;
}

.progress-meter > .meter-right {
	float: right;
	border-right-width: 2px;
}

.progress-meter > .meter-right:last-child {
	border-left-width: 2px;
}

.progress-meter > .meter > .meter-text {
	position: absolute;
	display: inline-block;
	bottom: -20px;
	width: 100%;
	font-weight: 700;
	font-size: 0.85em;
	color: rgb(160, 160, 160);
	text-align: left;
}

.progress-meter > .meter.meter-right > .meter-text {
	text-align: right;
}
</style>


@endsection

@section('content')

<div class="container">

<div class="resume">
    <header class="page-header">
    <h1 class="page-title">{{$catastrophe->name}}</h1>
  </header>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
    <div class="panel panel-default">
      <div class="panel-heading resume-heading">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-xs-12 col-sm-4">
              <figure>
                <img class="img-circle img-responsive" alt="" src="http://placehold.it/300x300">
              </figure>
              
              
              
            </div>

            <div class="col-xs-12 col-sm-8">
              <ul class="list-group">
                <li class="list-group-item">Tipo: {{$catastrophe->type}} </li>
                <li class="list-group-item">Región: {{$catastrophe->commune->province->region->name}}</li>
                <li class="list-group-item">Provincia: {{$catastrophe->commune->province->name}}</li>
                <li class="list-group-item">Comuna: {{$catastrophe->commune->name }}</li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="bs-callout bs-callout-danger">
        <h4>Descripción</h4>
        <p>
        {{$catastrophe->description}}
        </p>
      </div>
      <!-- Opción para listar las actividades y todo eso.
      <div class="bs-callout bs-callout-danger">
        <h4>Education</h4>
        <table class="table table-striped table-responsive ">
          <thead>
            <tr><th>Degree</th>
            <th>Graduation Year</th>
            <th>CGPA</th>
          </tr></thead>
          <tbody>
            <tr>
              <td>Masters in Computer Science and Engineering</td>
              <td>2014</td>
              <td> 3.50 </td>
            </tr>
            <tr>
              <td>BSc. in Computer Science and Engineering</td>
              <td>2011</td>
              <td> 3.25 </td>
            </tr>
          </tbody>
        </table>
      </div>
    -->
    </div>

  </div>
</div>
    
</div>

</div>



@endsection