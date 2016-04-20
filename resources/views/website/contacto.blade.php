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



	<nav class="orange darken-1">
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
<section class="container">
	<form class="col s12" action="/mensaje" method="POST">
	{{ csrf_field() }}
	<h2>Contáctanos</h2>

		<div class="card-panel form-acceso">
			<label>Ingresa el nombre</label>
			<input id="nombre" name="nombre" type="text" class="validate" required />
			<label>Ingresa el email</label>
			<input id="email" name="email" type="email" class="validate" required />
			<label>Mensaje</label>
			<input id="mensaje" name="mensaje" type="text" class="validate" required />
		<div class="center">
		<button type="submit" class="waves-effect waves-light btn right teal accent-3"> Enviar</button>
	<br>
		</div>
 </div>

	</form>

</section>
<footer id="foot" class="page-footer orange darken-1">
 <div class="footer-copyright">
            <div class="container">
            Telefonos: (312) 30 7 58 88 o (312) 307 7376
               <a class="grey-text text-lighten-4 right btn-social" href="#!"><i class="fa fa-twitter-square"></i></a>
            <a class="grey-text text-lighten-4 right btn-social" href="https://www.facebook.com/MariscosHernandez/?fref=ts"><i class="fa fa-facebook-square"></i></a>
          
          	
          
          
            </div>

          </div>

</body>
</html>