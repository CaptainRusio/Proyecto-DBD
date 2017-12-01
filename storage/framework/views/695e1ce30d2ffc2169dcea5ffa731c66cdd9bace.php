
<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">


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

<?php echo $__env->yieldContent('scripts'); ?>
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
        

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="/"><i class= "fa fa-home" aria-hidden="true"> </i> Inicio</a></li>
            <li><a href="<?php echo e(url('catastrophesAndActions')); ?>"> <i class = "fa fa-fire"> </i> Catastrofes</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class= "fa fa-thumbs-up" aria-hidden="true"> </i> Participar <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo e(url('donate')); ?>">Como Donar</a></li>
              </ul>
            </li>
           
          
            
           

          </ul>
          <ul class="nav navbar-nav navbar-right hidden-xs">
            <?php if(Auth::check()): ?>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class = "fa fa-user"> </i> <?php echo e(Auth::user()->name); ?> <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo e(url('/profile')); ?>">Mi Perfil</a></li>
                <li><a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a></li>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
              </ul></li>
            <?php else: ?>

            <li ><a href="<?php echo e(url('login')); ?>">Ingresar</a></li>
             <li ><a href="<?php echo e(url('register')); ?>">Registrarse</a></li>
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
    
</body>

</html>
