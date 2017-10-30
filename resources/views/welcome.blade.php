
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movidosxchile</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            Bootsnipp
Tools 
Snippets 
New Snippet
Profile 

"slider with overlay"
Bootstrap 3.3.0 Snippet by jaikesh yadav
3.3.0 slider

 
PreviewHTMLCSS    Fork this  6.7K   


1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
.jk-slider{
    width:100%;

}
/*          Hero Headers        */
/********************************/
.hero {
    position: absolute;
    top: 30%;
    left: 50%;

    z-index: 3;
    font-weight: bold;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 1.5px 1.5px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}

.quienes{
  color: #fff;
}

.necesitamos{
  color: #591A9D;
}

.ayudanos{
  color: #FFC500;
}

.hero h1 {
    font-size: 6em;    
    font-weight: bold;
    margin: 0;
    padding: 0;
}

.carousel{
    
    height: 450px;
    
}
.imagenCarrusel{
    height: 500px;
    width: 100%;
}


.fade-carousel .carousel-inner .item .hero {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .hero {
    opacity: 1;
Similar snippets: See More
2.0K  0 
Slider with white overlay


6.4K  4 
Bootstrap Navbar and Slider Overlay Text


5.9K  8 
Background Image Overlay


5.3K  3 
Background Overlay with text



 
 
 
        </style>
    </head>
    <body>
    @extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height">
            
            <section class="jk-slider">
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
    <li data-target="#carousel-example" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
  
    <div class="item active">
    <div class="hero quienes" >
        <hgroup>
            <h1>¿Quienes Somos?</h1>        
            <h2> bla bla bla </h2>
            <p>bla bla bla bla bla</p>
        </hgroup>
        
      </div>
      <div class="overlay"></div>
     <a href="#"><img src="brigadistas.jpg" class="imagenCarrusel" /></a>
        
    </div>
  <div class="item">
    <div class="hero necesitamos">
        <hgroup>
            <h1>Te necesitamos</h1>        
            <h2>Se voluntario hoy</h2>
            <p>Bla bla bla</p>
        </hgroup>
        
      </div>
      
       <div class="overlay"></div>
      <a href="#"><img src="voluntarios.jpg" class="imagenCarrusel"  /></a>
      
    </div>
    <div class="item">
        <div class="hero ayudanos">
        <hgroup>
            <h1>Ayudanos</h1>        
            <h2>Toda cooperacion suma! </h2>
            <p>Bla bla bla</p>
        </hgroup>
        
      </div>
        <div class="overlay">
      <img src="voluntarios2.jpg" class="imagenCarrusel"  />
      </div>
    </div>
  </div>

  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
    
</section>
        </div>
        @endsection
    </body>
</html>
