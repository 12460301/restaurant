<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/materialize.min.css"/>

</head>
<body>
 

<div class="row">
    <form action="upload" class="col s12" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s6">
          <input name="nombre" placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="nombre">Nombre</label>
        </div>
        </div>
        <div class="row">
        <div id="email2" class="input-field col s6">
        <textarea class="materialize-textarea" cols="10" name="descripcion"></textarea>
          <label id="em" for="descripcion"><i id="i-email" class="fa fa-user"></i>Descripcion</label>
        </div>
      </div>
    
     
      <div class="row">
        <div class="input-field col s6">
          <input name="precio" id="precio" type="text" class="validate">
          <label for="precio">precio</label>
        </div>
      </div>
      <div class="row">
      <div class="file-field input-field col s2">
      <div class="btn">
        <span>File</span>
        <input type="file" name="file" id="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
     </div>
      <div class="row">
        <div id="btn" >
          <input value="upload" class="btn waves-effect waves-light" type="submit" name="submit">
          
  
  
        </div>
      </div>
    </form>
  </div>

<script src="/js/jquery.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script src="/js/app.js"></script>
	
</body>
</html>