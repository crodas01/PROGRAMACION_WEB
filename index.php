<?php
include('session.php');
?>
<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sito Consultoria</title>
<meta name="description" content="Pagina web virtualizacion">
<meta name="author" content="Raul Andres Ascencio">
<link rel="icon" href="favicon.png" sizes="16x16" type="image/png">
<link href="css/StyleSheet.css" rel="stylesheet" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/general.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="container-fluid">
  <nav class="navmenu">
   <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" width="150" height="45"/></a>
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
       </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="defaultNavbar1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
          <li><a href="servicios.php">Servicios</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contacto.php">Contacto</a></li>
        </ul>
        <div id="wrapper" style="width: 200px; float: left;"> 
        <a href="https://twitter.com" target="_blank"><img src="images/twitter.png" alt="Twitter" width="33" height="33" class="imgcenter"></a>
					<a href="https://www.youtube.com/" target="_blank"><img src="images/youtube.png" alt="Youtube" width="33" height="33" class="imgcenter"></a>
					<a href="https://www.facebook.com/" target="_blank"><img src="images/facebook.png" alt="Facebook" width="33" height="33" class="imgcenter"></a>
					<a href="https://co.linkedin.com/" target="_blank"><img src="images/linkedin.png" alt="Linked-In" width="33" height="33" class="imgcenter"></a>
				</div>
                <?php
				if(isset($_SESSION['login_user'])){
					echo '<ul class="nav navbar-nav">Hola, '; 
					echo $login_session; 
					echo '<li class="col-lg-6"><a href="logout.php">Salir</a></li></ul>';
}
else {
       echo '<ul class="nav navbar-nav navbar-right">';
        echo '<li class="col-lg-12"><a href="login.php">Login</a></li></ul>';
		}
        ?>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</div>
<div id="contenedor">
		
	<header>
			
			<br />
			<div style="width: 100%;" >
				<img src="images/header.png" width="100%" height="20%" alt="Header">
			</div>
			<br /><br /><br /><br />
			<div style="width: 100%">
				<hr>
				<h1>NOS ESPECIALIZAMOS EN</h1>
				<hr>
				<div style="float: left; width: 25%; text-align: center;">
					<img src="images/virtualizacion.png" alt="Virtualizacion" width="185" height="116">
					<br />Virtualizaci&oacute;n de centros de datos y servidores
				</div>
				<div style="float: left; width: 25%; text-align: center;">
					<img src="images/optimizacion.png" alt="Optimizacion" width="185" height="116">
					<br />Optimizaci&oacute;n de entornos virtuales
				</div>
				<div style="float: left; width: 25%; text-align: center;">
					<img src="images/operacion.png" alt="Operacion" width="185" height="116">
					<br />Operaci&oacute;n infraestructura virtual
				</div>
				<div style="float: left; width: 25%; text-align: center;">
					<img src="images/implementacion.png" alt="Implementacion" width="185" height="116">
					<br />Implementaci&oacute;n de esquemas de backup
				</div>
				<hr>
				<a id="NOSOTROS"><h1>PORQUE NOSOTROS</h1></a>
				<hr>
				<div style="float: left; width: 33%; text-align: center;">
					<img src="images/experiencia.png" alt="Experiencia" width="185" height="116">
					<br /><b>EXPERIENCIA</b><br /> M&aacute;s de 5 a&ntilde;os de experiencia.<br />M&aacute;s de 500 servidores virtualizados.<br />Profesionales certificados
				</div>
				<div style="float: left; width: 33%; text-align: center;">
					<img src="images/servicio.png" alt="Servicio" width="185" height="116">
					<br /><b>SERVICIO</b><br /> Disponibilidad 7/24.<br />Asesor&iacute;a permanente
				</div>
				<div style="float: left; width: 33%; text-align: center;">
					<img src="images/enfoque.png" alt="Enfoque" width="185" height="116">
					<br /><b>ENFOQUE</b><br /> Soluciones a la medida de su negocio
				</div>
			</div>
		</header>
<!-- Cuerpo de la pagina -->
		<footer style="width: 100%">
			<p>2016 &reg; Derechos reservados</p>
  </footer>
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>