

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movidosxchile</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">




<title>Perfil</title>
@extends('layouts.app')


@section('content')
<content>
	<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <A href="{{url('editprofile')}}" >Editar Perfil</A>
       <br>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title" align="center">Datos Personales</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombre</td>
                        <td>{{ Auth::user()->name }}</td>
                      </tr>
                      <tr>
                      <tr>
                        <td>Tipo de usuario</td>
                        <td>Usuario natural</td>
                      </tr>
                      <tr>
                        <td>Voluntariado</td>
                        <td>Activo</td>
                      </tr>
                      <tr>
                        <td>Correo electrónico</td>
                        <td><a href="mailto:Auth::user()->email">{{ Auth::user()->email }}</td>
                      </tr>                           
                      </tr>
                     
                    </tbody>
                  </table>
					<form method="post" action="showActionUser">
          <input type = "hidden" name = "_token" value="{{ csrf_token()}}"> 
          <input type="hidden" name="id" value="{{Auth::user()->id}}">
          <button type="submit" class="btn btn-info btn-md btn-block"><span class="glyphicon glyphicon-plus">
          </span> Ver Medidas</button>

        </form>
					

                </div>
              </div>
            
        </div>
      </div>
    </div>
</content>




@endsection