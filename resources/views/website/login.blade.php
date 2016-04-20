<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/materialize.min.css"/>
	<link rel="stylesheet" href="/css/login.css"/>
</head>
<body>
	<nav class="orange darken-1">
       <div class="nav-wrapper">
          <a id="t-libreria" href="/" class="brand-logo">Marsicos Hernádez</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i id="i-menu" class="fa fa-bars"></i></a>
    <ul class="right hide-on-med-and-down">
       
        <li><a href="/">Regresar<i id="i-login" class="fa fa-sign-in"></i></a></li>
    </ul>
    <ul class="side-nav" id="mobile-demo">
        <li><a href="/">Regresar<i id="i-login" class="fa fa-sign-in"></i></a></li>
    </ul>
         </div>
    </nav>

<section id="seccion" class="container">	
	<legend id="titulo">Inicio de Sesión</legend>
 <div class="row">
    <form class="col s12" action="/log" method="POST">
    {{ csrf_field() }}
     <div class="row">
        <div id="email2" class="input-field col s10">
          <input name="email" id="email" type="email" class="validate" >
          <label id="em" for="email"><i id="i-email" class="fa fa-user"></i>Email </label>
        </div>

      </div>
     
      <div class="row">
        <div id="pass" class="input-field col s10">
          <input name="password" id="password" type="password" class="validate">
          <label id="pass2" for="password"><i id="i-pass" class="fa fa-key"></i>Password</label>
        </div>
        

      </div>
       <div class="row">
        <div id="btn">
          <button id="boton" class="btn waves-effect waves-light" type="submit" name="action">Logear
   <i id="i-login" class="fa fa-sign-in fa-4x"></i>
  </button>
  <a href="/insertar_usuario">
  <button id="boton" class="btn waves-effect waves-light" type="button" name="action">Registrarse
   <i id="i-login" class="fa fa-sign-in fa-4x"></i></button>
  </a>
        </div>
      </div>
    </form>
  </div>
	</section>





<script src="/js/jquery.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>