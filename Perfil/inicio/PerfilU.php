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
                <li><a href="../Home/Home.htlm">Home</a></li>
                <li class="active"><a href="#">Perfil</a></li>
                <?php
                  $Cod_cliente=$_GET['codigo'];
                  $html='<li><a href="MisCompras.php?codigo='.$Cod_cliente.'">Mis compras</a></li>';
                  $html='<li><a href="MisVentas.php?codigo='.$Cod_cliente.'">Mis ventas</a></li>';
                  $html='<li><a href="MisSolicitudes.php?codigo='.$Cod_cliente.'">Mis Solicitudes</a></li>';
                  print $html;
                 ?>




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
        <div class="col-lg-4">
			    <a name="paises" id="pa"></a>
          <img  src="../src/Img.jpg"  width="140" height="140">
             <h1>INFORMACION DE USUARIO</h1><br/><br/>
            <?php
              require_once('Conexion.php');
              //Obtener valores del formulario
              $Cod_cliente = $_GET['codigo'];
              print '<h1>'.$Cod_cliente.'</h1>';
                  $sql = "SELECT * FROM clientes WHERE codcli='.$Cod_cliente.'";
                  $result = mysqli_query($Conexion,$sql);
                    while ($fila = mysqli_fetch_assoc($result)){
                        $info='<h3>Nombre : '.$fila['nombre'].' '.$fila['apellidos'].'</h3><br/>';
                        $info.='<h3>Cédula : '.$fila['cedula'].'</h3><br/>';
                        $info.='<h3>Email : '.$fila['email'].'</h3><br/>';
                        $info.='<h3>Pais : '.$fila['pais'].'</h3><br/>';
                        $info.='<h3>Dirección : '.$fila['dircli'].'</h3><br/>';
                        $info.='<h3>Sexo : '.$fila['sexo'].'</h3><br/>';
                        $info.='<h3>Teléfono : '.$fila['telefono'].'</h3><br/>';
                        $info.='<h3>Fecha de nacimiento : '.$fila['fecha_nac'].'</h3><br/>';
                        print $info;
                    }
            ?>
        </div><!-- /.col-lg-4 -->
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
