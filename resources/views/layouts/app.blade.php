
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    
.navbar.navbar-inverse .navbar-nav > li {
  font-size: 1.7rem;
  font-weight: bold;
}
</style>

@yield('scripts')
</head>
@if(Auth::user() == null)
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
        

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="/"><i class= "fa fa-home" aria-hidden="true"> </i> Inicio</a></li>
            <li><a href="{{url('catastrophesAndActions')}}"> <i class = "fa fa-fire"> </i> Catastrofes</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class= "fa fa-thumbs-up" aria-hidden="true"> </i> Participar <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{url('donate')}}">Como Donar</a></li>
              </ul>
            </li>
                      @if(Auth::user() != null)
            @for($i = 0; $i < count(Auth::user()->roles); $i++)
              @if(Auth::user()->roles[$i]->id == 4)
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class= "fa fa-thumbs-up" aria-hidden="true"> </i> Administrar <b class="caret"></b></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('users')}}">Cuentas</a></li>
                  </ul>
                </li>
              @endif
            @endfor
          @endif
               
          
            
           

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
@endif
@if(Auth::user() != null)
@if(Auth::user()->active == 1)

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
        

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="/"><i class= "fa fa-home" aria-hidden="true"> </i> Inicio</a></li>
            <li><a href="{{url('catastrophesAndActions')}}"> <i class = "fa fa-fire"> </i> Catastrofes</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class= "fa fa-thumbs-up" aria-hidden="true"> </i> Participar <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{url('donate')}}">Como Donar Dinero</a></li>
                <li><a href="{{url('donateThings')}}">Como Donar recursos</a></li>
              </ul>
            </li>
                      @if(Auth::user() != null)
            @for($i = 0; $i < count(Auth::user()->roles); $i++)
              @if(Auth::user()->roles[$i]->id == 4)
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class= "fa fa-thumbs-up" aria-hidden="true"> </i> Administrar <b class="caret"></b></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('users')}}">Cuentas</a></li>
                  </ul>
                </li>
              @endif
            @endfor
          @endif
               
          
            
           

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
@else
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
        

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">

            <li > Usuario Bloqueado!</li>
            
                      
               
          
            
           

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
@endif
@endif
</html>
