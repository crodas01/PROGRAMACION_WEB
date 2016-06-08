<?php
include('session.php');
?>
<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Sito Consultoria</title>
	<meta name="description" content="Pagina web virtualizacion">
	<meta name="author" content="Raul Andres Ascencio">
	<link rel="icon" href="favicon.png" sizes="16x16" type="image/png">
	<link href="css/StyleSheet.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/general.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCi-eV9U3Xi6if06Oam3n8HM8D4QDOqtJw"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(4.68032,-74.14130),
    zoom:12,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
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
			<div style="width: 100%;" >
				<form class="contact_form formulario" action="#" onsubmit="return validateForm()" runat="server"> 
                	<div align="left" style="padding-top: 80px; padding-left: 20px">
						<ul> 
							<li> <h2>Contáctanos</h2> 
								<span class="required_notification">* Datos requeridos</span> 
							</li> 
							<li> 
								<label for="nomb">Nombre:</label> 
								<input type="text" id="nomb" name="nomb" placeholder="Juan Pablo" required /> 
							</li> 
							<li> 
								<label for="email">Email:</label> 
								<input type="email" name="email" id="email" placeholder="info@developerji.com" required /> 
								<span class="form_hint">Formato correcto: "name@something.com"</span> 
							</li> 
							<li> 
								<label for="telef">Telefono:</label> 
								<input type="tel" name="telef" id="telef" placeholder="1-555555" required  /> 
								<span class="form_hint">Formato correcto: "1-555555"</span> 
							</li>
							<li> 
								<label for="date">Fecha de Nacimiento:</label> 
								<input type="date" name="date" id="date" placeholder="mm/dd/yyyy" required  /> 
								<span class="form_hint">Formato correcto: "mm/dd/yyyy"</span> 
							</li> 
							<li> 
								<label for="message">Mensaje:</label> 
								<textarea name="message" cols="40" rows="6" required></textarea> 
							</li>
							
							<li> 
								<button class="submit" type="submit">Enviar mensaje</button> 
							</li> 
						</ul> 
					</div> 
				</form>           
   			   <div id="googleMap" style="width:500px;height:380px;"></div>
			</div>
		</header>
		<!-- Cuerpo de la pagina -->
        		<footer style="width: 100%">
			<p>2016 &reg; Derechos reservados</p>
		</footer>
	</div>
</body>
</html>

