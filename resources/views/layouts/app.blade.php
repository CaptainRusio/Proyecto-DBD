
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


     <style>
    .logo{
    height: 20%;
    width: 20%;
    }
</style>

@yield('scripts')
</head>
<body>
    <div id="app">
<div class="container">
  <!-- Topper w/ logo -->
  <div class="row hidden-xs topper">
    <div class="col-xs-7 col-sm-7">
      <a href="http://www.movidosporchile.cl/"><img am-TopLogo alt="SECUREVIEW"  src="logo.jpg" class="img-responsive logo"></a>
    </div>
    <div class="col-xs-5 col-xs-offset-1 col-sm-5 col-sm-offset-0 text-right ">
    </div>
  </div> <!-- End Topper -->
  <!-- Navigation -->
  <div class="row">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs-inline-block nav-logo" href="/"><img src="/images/logo-dark-inset.png" class="img-responsive" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav js-nav-add-active-class">
            <li ><a href="/"><i class= "fa fa-home" aria-hidden="true"> </i> Inicio</a></li>
            <li><a href="{{url('catastrophesAndActions')}}"> <i class = "fa fa-fire"> </i> Catastrofes</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class= "fa fa-thumbs-up" aria-hidden="true"> </i> Participar <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{url('donate')}}">Como Donar</a></li>
                <li><a href="{{url('voluntier')}}">Como Ser Voluntario</a></li>
              </ul>
            </li>
            <li><a href="{{url('contact')}}"><i class= "fa fa-compress" aria-hidden="true"> </i> Contáctanos</a></li>
          
            
            <li><a href="{{url('about')}}"> <i class= "fa fa-users" aria-hidden="true"> </i> Sobre Nosotros</a></li>
           

          </ul>
          <ul class="nav navbar-nav navbar-right hidden-xs">
            @if(Auth::check())
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class = "fa fa-user"> </i> {{ Auth::user()->name }} <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{url('/profile')}}">Mi Perfil</a></li>
                <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              </ul></li>
            @else

            <li ><a href="{{url('login')}}">Ingresar</a></li>
             <li ><a href="{{url('register')}}">Registrarse</a></li>
            @endif
              
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </div>
</div>

        @yield('content')
    </div>

    <!-- Scripts -->
    
</body>

</html>
