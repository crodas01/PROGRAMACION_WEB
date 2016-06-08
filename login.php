<?php
include('ingreso.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: index.php");
}
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/style.css">
        <link href="css/StyleSheet.css" rel="stylesheet" />

    
    
    
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
        
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</div>

    
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Identifícate</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Regístrate</div>
  </div>
  <div class="form">
    <h2>Ingresa a tu cuenta</h2>
    <form action="" method="post">
      <input type="hidden" name="form" value="form1">
      <input id="name" name="username" type="text" placeholder="Usuario"/>
      <input id="password" name="password" type="password" placeholder="Contraseña"/>
      <input name="submit" type="submit" value=" Login ">
      <span><?php echo $error; ?></span>
    </form>
  </div>
  <div class="form">
    <h2>Crear una cuenta</h2>
    <form action="" method="post">
      <input type="hidden" name="form" value="form2">
      <input id="name" name="username" type="text" placeholder="Usuario" required/>
      <input id="password" name="password" type="password" placeholder="Contraseña" required/>
      <input type="email" placeholder="Email" name="Email" required/>
      <input type="tel" placeholder="Móvil" name="tel"/>
      <input type="number" placeholder="Identificación" name="ced"/>
      <input name="submit" type="submit" value=" Registrar "</button>
    </form>
  </div>
  
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
