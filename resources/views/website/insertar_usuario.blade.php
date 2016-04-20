<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8">
	<title>Registrarse</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
    <link rel="stylesheet" href="/css/app2.css"/>
</head>
<body>
<nav class="orange darken-1">
       <div class="nav-wrapper">
          <a id="t-libreria" href="/" class="brand-logo">Registro de usuarios</a>
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
	<div class="row">
    <form action="/usuario" method="post" class="col s12" enctype="multipart/form-data">
    {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s11">
          <label for="nombre">Nombre</label><br>
          <input name="nombre" placeholder="Escribe tu nombre" id="nombre" type="text" class="validate">
        </div>
         </div>
         <div class="row">
        <div class="input-field col s11">
         <label for="email">Email</label><br>
          <input name="email" placeholder="Escribe un E-mail" id="email" type="email" class="validate">
        </div>
      </div>
       <div class="row">
        <div class="input-field col s11">
         <label for="telefono">Telefono</label><br>
          <input name="telefono" placeholder="Escribe tu numero telefonico" id="telefono" type="text" class="validate">
         
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s11">
            <label for="password">Password</label><br>
          <input name="password" placeholder="Escribe una password" id="password" type="password" class="validate">
      
        </div>
      </div>
       <div class="row">
        <div class="input-field col s11">
            <label for="tipo">Tipo Usuario</label><br>
      <input name="tipo_usuario" type="radio" id="test1" value=1 />
      <label for="test1">Administrador</label>
    </p>
    <p>
      <input name="tipo_usuario" type="radio" id="test2" value=2 />
      <label for="test2">Invitado</label>
    </p>
      
        </div>
      </div>
     <center> <button class="btn waves-effect waves-light orange darken-4" type="submit" name="btn">Registrar Usuario
  </button>
  </center>

     
      
    </form>
  </div>
  </section>
 
</body>
</html>