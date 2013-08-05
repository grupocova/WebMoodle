<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aula Virtual | FIA</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
<!--<link rel="stylesheet" type="text/css" href="css/prettify.css" />-->
<!--<link rel="stylesheet" type="text/css" href="css/docs.css" />-->
<link rel="stylesheet" type="text/css" href="css/Style.css" />
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap-glyphicons.css" />
</head>

<body>

<div class="navbar navbar-fixed-top navprin">
  <div class="container">
    <a class="navbar-brand" href="#">AULA Virtual</a>
    <div class="nav-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="#">UPeU</a></li>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Cursos</a></li>
        <li><a href="#">Docentes</a></li>
        <li><a href="#">Biblioteca Virtual</a></li>           
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<!-- Header -->
<header>
  
</header>


<!-- Principal -->
<div class="container">
<div class="row logo">
  <div class="col-lg-3 col-offset-1 panel">  
    <a href="#">
      <img src="photos/logo_upeu.png"  alt="">
    </a>
  </div>
  
  <div class="col-lg-7  panel" id="slider">    
    <div id="carousel-example-generic" class="carousel slide">  
      <!-- Indicators -->
      <ol class="carousel-indicators" >
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="photos/slide01.png" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>            
            </div>
          </div>
        </div>
        
        <div class="item">
          <img src="photos/slide02.png" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>            
            </div>
          </div>
        </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="icon-prev"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="icon-next"></span>
      </a> 
    </div>    
  </div>  
</div>

<div class="row">
    <!--Login-->
    <div class="col-lg-3 col-offset-3 panel cont " id="cont-login">
  	<div class="panel-heading head">
      <h3 class="panel-title">Bienvenido</h3>
    </div>
    <form>
      <fieldset>
        <legend>Iniciar Sesion</legend>
        <div class="form-group input-group">
          <span class="input-group-addon glyphicon glyphicon-user"></span>
          <input type="text" class="form-control" id="username" name="username" placeholder="Usuario">
        </div>
        <div class="form-group input-group">
          <span class="input-group-addon glyphicon glyphicon-lock"></span>
          <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="rememberusername" id="rememberusername" value="1"> Recordarme
          </label>
        </div>
        <button type="submit" class="btn btn-small btn-default">Ingresar</button>
      </fieldset>
    </form>
    </div> 
    
    <!--Opciones-->
    <div class="col-lg-3 panel cont cont-col" id="cont-login-op"> 
      <ul class="list-group">      
        <li class="list-group-item"><span class="glyphicon glyphicon-pencil"></span><a href="#"> Registrar</a></li>
        <li class="list-group-item"><span class="glyphicon glyphicon-lock"></span><a href="#"> Olvido contraseña?</a></li>
        <li class="list-group-item"><span class="glyphicon glyphicon-info-sign"></span><a href="#"> Información</a></li>
      </ul>  
    </div> 
</div>
</div><!-- Fin Principal -->

<!-- footer -->
<footer class="footer">
  <div class="container"> 
  <div class="row">   
    <div class="icosocial col-lg-12 panel">
      <p>©2013 Universidad Peruana Uni&oacute;n - Facultad de Ingeniería y Arquitectura</p>
      <br />
      <ul>        
      <li><a href="#" id="face"><span>Facebook</span></a></li>
      <li><a href="#" id="twit"><span>Twitter</span></a></li>
      <li><a href="#" id="you"><span>Youtube</span></a></li>
      <li><a href="#" id="gog"><span>Google +</span></a></li>
      </ul>      
    </div>    
  </div>     
  </div>
</footer>
<script src="js/jquery.js"></script>
  <script src="js/holder.js"></script>
  <script src="Bootstrap/js/bootstrap.js"></script>
  <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>