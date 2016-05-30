<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../icono.ico">

    <title>PERFIL</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body style="background-color:#000">
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" >PERFIL DE USUARIO</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="../Home/Home.html">Home</a></li>
                <li><a href="Perfil.php">Perfil</a></li>
                <li><a href="MisCompras">Mis compras</a></li>
                <li><a href="MisVentas">Mis ventas</a></li>
                <li class="active"><a href="#">Mis Solicitudes</a></li>
				<!--<form class="navbar-form navbar-right">
					<div class="form-group">
						<input type="text" placeholder="Correo" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" placeholder="Cedula" class="form-control">
					</div>
					<button type="submit" class="btn btn-success">Ingresar</button>
				</form>-->
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
		    <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="main-slide" src="../src/a.jpg" alt="Main slide">
       </div>
		    <div class="item">
          <img class="first-slide" src="../src/b.jpg" alt="First slide">
        </div>
        <div class="item">
          <img class="second-slide" src="../src/c.jpg" alt="Second slide">
        </div>
        <div class="item">
          <img class="third-slide" src="../src/e.jpg" alt="Third slide">
       </div>
       <div class="item">
         <img class="third-slide" src="../src/d.jpg" alt="Third slide">
      </div>
      <div class="item">
        <img class="third-slide" src="../src/f.jpg" alt="Third slide">
     </div>
     <div class="item">
       <img class="third-slide" src="../src/g.jpg" alt="Third slide">
    </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
        <div class="row">

            <img  src="../src/disco.png"  width="140" height="140" style="margin-left: 315px;">
               <center><h1 style="margin-right: 0px; margin-top: -86px;">SOLICITUDES</h1></center>
               <table class="table table-responsive" style="margin-top: -36px; margin-left: 137px;">
               <thead><tr><th>Nombre disco</th><th>Artista</th><th>Estado</th></tr></thead><tbody>
   						<?php
   							require_once('Conexion.php');

                    $sql = "SELECT * FROM solicitud WHERE cod_cliente='1'";
                    $result = mysqli_query($Conexion,$sql);
   											while ($fila = mysqli_fetch_assoc($result)) {
                              $estadoSolicitud=$fila1['estado_sol'];
                              if($estadoSolicitud==1){
                                  $estadoSolicitud='EFECTUADA';
                              }else{
                                 $estadoSolicitud='EN ESPERA';
                              }
                              $t.='<tr><td>'.$fila['nombre_disco'].'</td><td>'.$fila['artista'].'</td><td>'.$estadoSolicitud.'</td></tr>';
   											}
   											$t.='</tbody>';
   											$t.='</table>';
                        print $t;

   						?>

      </div><!-- /.row -->
      <hr class="featurette-divider">
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>

      </footer>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
