<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../src/favicon.png">

    <title>PERFIL ADMINISTRADOR</title>

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
        <style type="text/css">

      * {
        margin:0px;
        padding:0px;
      }

      #header {
        margin:auto;
        width:500px;
        font-family:Arial, Helvetica, sans-serif;
      }

      ul, ol {
        list-style:none;
      }

      .nav > li {
        float:left;
      }

      .nav li a {
        background-color:#232222;
        color:#fff;
        text-decoration:none;
        padding:10px 12px;
        display:block;
      }

      .nav li a:hover {
        background-color:#434343;
      }

      .nav li ul {
        display:none;
        position:absolute;
        min-width:140px;
      }

      .nav li:hover > ul {
        display:block;
      }

      .nav li ul li {
        position:relative;
      }

      .nav li ul li ul {
        right:-140px;
        top:0px;
      }

    </style>
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
              <a class="navbar-brand" >PERFIL ADMINISTRADOR</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav" style="margin-top: 5px;">
                <li><a href="../../Home/Home.php?codigo=1">Home</a></li>
                <li class="active"><a href="PerfilA.php">Informes de ventas</a></li>
                <li><a href="Solicitudes.php">Solicitudes</a></li>
                <li><a href="MisSolicitudes.php">Subir Publicidad</a></li>
                <ul class="nav" style="height: 0px;">
                  <li><a href="" style="margin-top: -39px; margin-left: 604px;">Ingresado como ADMINISTRADOR</a>
                    <ul>
                      <li><a href="../../Home/Home.php" style="margin-left: 700px;width: 84px;">Salir</a></li>
                    </ul>
                  </li>
                </ul>

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


        <ul class="nav">
          <li><a href="" style="margin-top: -10px; margin-left: 143px;">INFORMES</a>
            <ul>
              <li><a href="Ventas.php" style="margin-left:143px;width: 220px;">Ventas</a></li>
              <li><a href="VentasPersonales.php" style="margin-left:143px;width: 220px;">Ventas personales</a></li>
              <li><a href="TOPDiscos.php" style="margin-left:143px;width: 220px;">TOP discos más vendidos</a></li>
              <li><a href="TOPClientes.php" style="margin-left: 143px;width: 220px;">TOP clientes</a></li>
            </ul>
          </li>
        </ul>
          <img  src="../src/discos2.png"  width="140" height="140" style="margin-left: 427px; margin-top: 139px;">
             <center><h1 style="margin-right: -155px; margin-top: -86px;width: 1163px">VENTAS</h1></center>
             <table class="table table-responsive" style="margin-top: -36px; margin-left: 137px;">
             <thead><tr><th>Codigo</th><th>Cliente</th><th>Disco</th><th>Cantidad</th><th>Valor</th><th>Fecha</th></tr></thead><tbody>
 						<?php
 							require_once('Conexion.php');

                  $Cod_cliente = $_GET['codigo'];
                  $sql = "SELECT * FROM ventas";
                  $result = mysqli_query($Conexion,$sql);
 											while ($fila1 = mysqli_fetch_assoc($result)) {
                        $codigoDisco=$fila1['cod_disco'];
                        $codigoCliente=$fila1['cod_cliente'];
                        $sql2 = "SELECT * FROM discos WHERE codigo=$codigoDisco";
                        $result2 = mysqli_query($Conexion,$sql2);
                        $fila2 = mysqli_fetch_assoc($result2);
                        $NomDisco=$fila2['nombre'];
                        $sql3 = "SELECT * FROM clientes WHERE codcli=$codigoCliente";
                        $result3 = mysqli_query($Conexion,$sql3);
                        $fila3 = mysqli_fetch_assoc($result3);
                        $NomCliente=$fila3['nombre'].' '.$fila3['apellidos'];
                        $t.='<tr><td>'.$fila1['cod_venta'].'</td><td>'.$NomCliente.'</td><td>'.$NomDisco.'</td><td>'.$fila1['cantidad'].'</td><td>'.$fila1['valor_venta'].'</td><td>'.$fila1['fecha_venta'].'</td></tr>';
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
