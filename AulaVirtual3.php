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
<!-- Navegacion Superior -->
<div class="navbar navbar-fixed-top navprin">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="photos/minilogo_AV.png"  alt=""></a>
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

<!-- Contenido -->
<div class="body-container">
<div class="container">

  <div class="row encabezado">
  <div class="col-lg-12">  
    <a href="#" class="logo logo-left">
      <img src="photos/logo_upeu.png"  alt="">
    </a>
    <a href="#" class="logo logo-right">
      <img src="photos/logo_AV.png"  alt="">
    </a>
  </div>
  </div>

<!-- Principal -->
  <div class="row">    
    <div class="col-lg-5 col-offset-1">
      <div class="panel " id="cont-info">

        <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
        <li><a href="#profile" data-toggle="tab">Profile</a></li>        
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="home">
          <p>Raw denim you probably haven't heard of them jean shorts Austin. 
            Nesciunt tofu stumptown aliqua, retro synth master cleanse.
            Mustache cliche tempor, williamsburg carles vegan helvetica.</p>
        </div>
        <div class="tab-pane fade" id="profile">
          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. 
            Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan 
            four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft</p>
        </div>
      </div>

      </div>
    </div>

    <!--Login-->
    <div class="col-lg-3 panel cont" id="cont-login">
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
    <div class="col-lg-2 panel cont" id="cont-login-op"> 
      <ul class="list-group">      
        <li class="list-group-item"><a href="#" class="iconos"><div id="ico-reg"></div>Registrar</a></li>
        <li class="list-group-item"><a href="#" class="iconos"><div id="ico-inf"></div>Olvido contraseña?</a></li>
        <li class="list-group-item"><a href="#" class="iconos"><div id="ico-unlock"></div>Información</a></li>
      </ul>  
    </div> 

  </div><!-- Fin Fila -row -->
</div><!-- Fin Principal -->

</div><!-- Fin contenedor -container -->
</div>

<!-- footer -->
<footer class="footer">
  <div class="row">   
    <div class="icosocial col-lg-12">
      <p>©2013 Universidad Peruana Uni&oacute;n - Facultad de Ingeniería y Arquitectura</p>
      <p>Altura Km. 19.5 Carretera Central, Ñaña-Lima <br />
        Telf.: 01-6186300 - Fax 01-6186-339 <br />
        Correo: webmaster.fia@upeu.edu.pe <br />
        Lima - Perú</p>
      <br />
      <ul class="footer-links">        
      <li><a href="#" id="face"><span>Facebook</span></a></li>
      <li><a href="#" id="twit"><span>Twitter</span></a></li>
      <li><a href="#" id="you"><span>Youtube</span></a></li>
      <li><a href="#" id="gog"><span>Google +</span></a></li>
      </ul>      
    </div>    
  </div>   
</footer>

<script src="js/jquery.js"></script>
  <script src="js/holder.js"></script>
  <script src="Bootstrap/js/bootstrap.js"></script>
  <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>