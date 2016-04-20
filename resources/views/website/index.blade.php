<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/materialize.min.css"/>
	<link rel="stylesheet" href="/css/app.css"/>
</head>


<body>

	<header>
<ul id="dropdown1" class="dropdown-content">
  <li id="pla"><a href="/platillos">Platillos<i class="fa fa-cutlery"></i></a></li>
   <li class="divider"></li>
  <li><a href="/bebidas">Bebidas<i class="fa fa-glass"></i></a></li>
  <li class="divider"></li>
  <li><a href="/postres">Postres<i class="fa fa-birthday-cake"></i></a></li>
</ul>

<ul id="dropdown2" class="dropdown-content">
  <li id="pla"><a href="/platillos">Platillos<i class="fa fa-cutlery"></i></a></li>
   <li class="divider"></li>
  <li><a href="/bebidas">Bebidas<i class="fa fa-glass"></i></a></li>
  <li class="divider"></li>
  <li><a href="/postres">Postres<i class="fa fa-birthday-cake"></i></a></li>
</ul>




    <nav class=" brown lighten-2">
       <div class="nav-wrapper">
          <a id="t-libreria" href="/" class="brand-logo">Marsicos Hernádez<i id="i-libro" class="fa fa-cutlery"></i></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i id="i-menu" class="fa fa-bars"></i></a>
           <img id="icono" src="/img/icono.png">
    <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Nuestro  Menú<i id="i-menu"class="fa fa-caret-down"></i></a></li>
        <li><a href="/paquetes">Paquetes<i id="i-carro" class="fa fa-shopping-cart"></i></a></li>
        <li><a href="/ofertas">Ofertas<i class="fa fa-usd"></i></a></li>
        <li><a href="/contacto">Contacto<i id="i-user" class="fa fa-user"></i></a></li>
        <li><a href="/login">Acceder<i id="i-login" class="fa fa-sign-in"></i></a></li>
    </ul>
    <ul class="side-nav" id="mobile-demo">
        <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Menú que ofrecemos<i id="i-menu2"class="fa fa-caret-down"></i></a></li>
        <li><a href="/paquetes">Paquetes<i id="i2-carro" class="fa fa-shopping-cart"></i></a></li>
        <li><a href="/ofertas">Ofertas<i class="fa fa-usd"></i></a></li>
        <li><a href="/contacto">Contacto<i id="i-user" class="fa fa-user"></i></a></li>
        <li><a href="/login">Acceder<i id="i-login" class="fa fa-sign-in"></i></a></li>
    </ul>
         </div>
    </nav>

	</header>

<section id="slider-libreria" class="container">
  <div class="slider">
    <ul id="ule" class="slides">
      <li>
        <img id="im1" src="/img/restaurante.jpg"> <!-- random image -->
        <div class="caption center-align">
              <h3>Marsicos Hernández, los mejores de la región!</h3>
            <h5 class="light grey-text text-lighten-3">El gran sabor del mar!</h5>
        </div>
      </li>

      <li>
        <img id="im2" src="/img/foto6.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>ven y disfruta del gran menú de platillos que ofrecemos!</h3>
            <h5 class="light grey-text text-lighten-3">Tu decides el sabor que quieres darle a tu vida.</h5>
         
        </div>
      </li>

      <li>
        <img id="im3" src="/img/foto2.jpg"> <!-- random image -->
        <div class="caption right-align">
         <h3>Elige en nuestra gran variedad de bebidas!</h3>
           
        </div>
      </li>

  <li>
        <img id="im4" src="/img/foto3.jpg"> <!-- random image -->
        <div class="caption center-align">
           <h3>Endulza tu dia con nuestros deliciosos postres!</h3>
        </div>
      </li>

      <li>
        <img id="im5" src="/img/foto5.jpg"> <!-- random image -->
        <div class="caption center-align">
            <h3>Contamos con paquetes excelentes para las reuniones familiares!</h3>
        </div>
      </li>
    </ul>
  </div>   
</section>

<section id="section2" class="container">
  <div class="row">
    <div class="col s12 l4">
    <center>
       <i class="fa fa-check-square-o fa-4x"></i>
        
       <p id="p1">Trabajamos orientados siempre hacia la calidad del producto y del servicio. 
       Operamos siempre bajo el más estricto sentido de la ética profesional. Nuestras actuaciones 
       se basan en la responsabilidad, disciplina interna y máxima eficiencia.</p>
    </center> 
    
    </div>
    <div class="col s12 l4">
    <center>
       <i class="fa fa-hand-o-down fa-4x"></i>
       <p id="p2">Nuestra misión es ofrecer platillos de mariscos diferentes a lo convencional, con una excelente presentación,
        buen sazón, precios accesibles y ambiente agradable, mientras disfrutas de las ricas bebidas.</p>
    </center>
     
    </div>
  
    <div class="col s12 l4">
       <center>

      <i class="fa fa-eye fa-4x"></i>
         
       <p id="p3">Nuestra visión es ser el mejor y más conocido restaurante de mariscos en el estado de colima, que le permita crecer con más sucursales, 
       conservando siempre nuestro sello característico, cálidad, presentación y precio.</p>
    </center>
    </div>
  </div>
</section>

 <footer class="page-footer orange darken-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
           <h5 class="white-text">Mariscos Hernandez<i id="i-libro" class="fa fa-cutlery"></i></h5>
                <p class="grey-text text-lighten-4">El mejor sabor</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="/platillos">Platillos</a></li>
                  <li><a class="grey-text text-lighten-3" href="#/bebidas">Bebidas</a></li>
                  <li><a class="grey-text text-lighten-3" href="/postres">Postres</a></li>
                  <li><a class="grey-text text-lighten-3" href="/paquetes">Paquetes</a></li>
                  <li><a class="grey-text text-lighten-3" href="/ofertas">Ofertas</a></li>
                   <li><a class="grey-text text-lighten-3" href="/contacto">Contacto</a></li>
                  <li><a class="grey-text text-lighten-3" href="/acceder">Acceder</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 - Guillermo Alejandro Gomez Valencia
               <a class="grey-text text-lighten-4 right btn-social" href="#!"><i class="fa fa-twitter-square"></i></a>
            <a class="grey-text text-lighten-4 right btn-social" href="https://www.facebook.com/MariscosHernandez/?fref=ts"><i class="fa fa-facebook-square"></i></a>
          
            
            </div>
          </div>
        </footer>

<script src="/js/jquery.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script src="/js/app.js"></script>

</body>
</html>
