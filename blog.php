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
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/StyleSheet.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.11.3.min.js"></script>
<script src="js/general.js"></script>
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
    <div class="articles container">
      
      <div class="article current">
        <div class="item row">
          <div class="col-xs-3">
            <p class="source">FLIGHT</p>
          </div>
          <div class="col-xs-6">
            <p class="title">Embraer adds third Legacy 500 prototype to flight test campaign</p>
          </div>
          <div class="col-xs-3">
            <p class="pubdate">Mar 23</p>
          </div>
        </div>
        <div class="description row">
          <div class="col-xs-3">&nbsp;</div>
          <div class="col-xs-6">
            <h1>Embraer adds third Legacy 500 prototype to flight test campaign</h1>
            <p>The third Legacy 500 has joined Embraer's flight test programme aimed at delivering the midsize business jet in 2014. The airtcraft, serial number 003...</p>
          </div>
          <div class="col-xs-3">&nbsp;</div>
        </div>
      </div>

      <div class="article">
        <div class="item row">
          <div class="col-xs-3">
            <p class="source">AW Commercial Aviation</p>
          </div>
          <div class="col-xs-6">
            <p class="title">CSeries Supplier Scramble</p>
          </div>
          <div class="col-xs-3">
            <p class="pubdate">Mar 22</p>
          </div>
        </div>
        <div class="description row">
          <div class="col-xs-3">&nbsp;</div>
          <div class="col-xs-6">
            <h1>CSeries Supplier Scramble</h1>
            <p>Three months before the planned first flight of its CSeries, Bombardier is grappling with supplier issues crucial to meeting its production cost...</p>
          </div>
          <div class="col-xs-3">&nbsp;</div>
        </div>
      </div>

      <div class="article">
        <div class="item row">
          <div class="col-xs-3">
            <p class="source">AW business aviation</p>
          </div>
          <div class="col-xs-6">
            <p class="title">Flying the Gulfstream G650</p>
          </div>
          <div class="col-xs-3">
            <p class="pubdate">Mar 22</p>
          </div>
        </div>
        <div class="description row">
          <div class="col-xs-3">&nbsp;</div>
          <div class="col-xs-6">
            <h1>Flying the Gulfstream G650</h1>
            <p>Gulfstream is turning up the heat in the large-cabin business aircraft competition with its new G650 flagship, the largest, fastest, farthest-ranging...</p>
          </div>
          <div class="col-xs-3">&nbsp;</div>
        </div>
      </div>

      <div class="article">
        <div class="item row">
          <div class="col-xs-3">
            <p class="source">FLIGHT</p>
          </div>
          <div class="col-xs-6">
            <p class="title">New retirements cut RAF VC10 fleet to four</p>
          </div>
          <div class="col-xs-3">
            <p class="pubdate">Mar 22</p>
          </div>
        </div>
        <div class="description row">
          <div class="col-xs-3">&nbsp;</div>
          <div class="col-xs-6">
            <h1>New retirements cut RAF VC10 fleet to four</h1>
            <p>The UK Royal Air Force has retired another two of its Vickers VC10 tankers, with the pair's departure reducing its inventory of the Rolls-Royce...</p>
          </div>
          <div class="col-xs-3">&nbsp;</div>
        </div>
      </div>

      <div class="article">
        <div class="item row">
          <div class="col-xs-3">
            <p class="source">FLIGHT</p>
          </div>
          <div class="col-xs-6">
            <p class="title">Virgin can deliver more value for Delta than for SIA: Bastian</p>
          </div>
          <div class="col-xs-3">
            <p class="pubdate">Jul 17</p>
          </div>
        </div>
        <div class="description row">
          <div class="col-xs-3">&nbsp;</div>
          <div class="col-xs-6">
            <h1>Virgin can deliver more value for Delta than for SIA: Bastian</h1>
            <p>Delta Air Lines president Ed Bastian is confident that the carrier can extract far more value from its shareholding in Virgin Atlantic compared with...</p>
          </div>
          <div class="col-xs-3">&nbsp;</div>
        </div>
      </div>

      <div class="article">
        <div class="item row">
          <div class="col-xs-3">
            <p class="source">AW Defense</p>
          </div>
          <div class="col-xs-6">
            <p class="title">Freedom Experiences Two More Power Outages</p>
          </div>
          <div class="col-xs-3">
            <p class="pubdate">Mar 22</p>
          </div>
        </div>
        <div class="description row">
          <div class="col-xs-3">&nbsp;</div>
          <div class="col-xs-6">
            <h1>Freedom Experiences Two More Power Outages</h1>
            <p>The Littoral Combat Ship (LCS-1) USS Freedom’s first overseas deployment to Southeast Asia has been marred by two more power outages...</p>
          </div>
          <div class="col-xs-3">&nbsp;</div>
        </div>
      </div>

      <div class="article">
        <div class="item row">
          <div class="col-xs-3">
            <p class="source">FLIGHT</p>
          </div>
          <div class="col-xs-6">
            <p class="title">FedEx to acquire up to 30 United 757s</p>
          </div>
          <div class="col-xs-3">
            <p class="pubdate">Mar 22</p>
          </div>
        </div>
        <div class="description row">
          <div class="col-xs-3">&nbsp;</div>
          <div class="col-xs-6">
            <h1>FedEx to acquire up to 30 United 757s</h1>
            <p>United Airlines is to sell up to 30 Boeing 757s to freight operator FedEx Express, with deliveries of the twinjets set to start this year.</p>
          </div>
          <div class="col-xs-3">&nbsp;</div>
        </div>
      </div>

    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>