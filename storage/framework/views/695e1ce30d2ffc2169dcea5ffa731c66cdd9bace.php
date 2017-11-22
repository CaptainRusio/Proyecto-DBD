
<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'MovidosxChile')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
     <style>
    
</style>
</head>
<body>
    <div id="app">
<div class="container">
  <!-- Topper w/ logo -->
  <div class="row hidden-xs topper">
    <div class="col-xs-7 col-sm-7">
      <a href="http://www.movidosporchile.cl/"><img am-TopLogo alt="SECUREVIEW"  src="logo.jpg" class="img-responsive"></a>
    </div>
    <div class="col-xs-5 col-xs-offset-1 col-sm-5 col-sm-offset-0 text-right ">
      <p am-CallNow>Llamame   ;) +56966207293 </p>
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
            <li class="active"><a href="/"><i class= "fa fa-home" aria-hidden="true"> </i> Inicio</a></li>
            <li><a href="<?php echo e(url('catastrophesAndActions')); ?>">Catastrofes</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class= "fa fa-thumbs-up" aria-hidden="true"> </i> Participar <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo e(url('donate')); ?>">Como Donar</a></li>
                <li><a href="<?php echo e(url('voluntier')); ?>">Como Ser Voluntario</a></li>
              </ul>
            </li>
            <li><a href="<?php echo e(url('contact')); ?>"><i class= "fa fa-compress" aria-hidden="true"> </i> Contáctanos</a></li>
          
            
            <li><a href="<?php echo e(url('about')); ?>"> <i class= "fa fa-users" aria-hidden="true"> </i> Sobre Nosotros</a></li>
            <li><a href="<?php echo e(url('pruebaBaseDatosVista')); ?>"> <i class= "fa fa-users" aria-hidden="true"> </i> Prueba base de datos</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right hidden-xs">
            <?php if(Auth::check()): ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo e(Auth::user()->name); ?> <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo e(url('donate')); ?>">Mi Perfil</a></li>
                <li><a href="<?php echo e(url('voluntier')); ?>">Mis Participaciones</a></li>
                <li><a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a></li>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
              </ul>
            <?php else: ?>

            <a type="button" class="navbar-btn btn btn-gradient-blue" am-latosans="bold" href="<?php echo e(url('login')); ?>">Ingresar</a>
              <a type="button" class="navbar-btn btn btn-gradient-blue" am-latosans="bold" href="<?php echo e(url('register')); ?>">Registrarse</a>
            <?php endif; ?>
              
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </div>
</div>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
