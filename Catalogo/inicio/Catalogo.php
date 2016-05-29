<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.png">

    <title>MUSIC RECORDS</title>

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
  <body>
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
              <a class="navbar-brand" >Music Records</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="../../Home/Home.html">Home</a></li>
                <li class="active"><a href="Catalogo.html">Catálogo</a></li>
                <li><a href="../../Solicitar/Solicitud.html">Solicitar Disco</a></li>
                <li><a href="../../RegistrarDisco/RegDisco.html">Venta Disco</a></li>
				<form class="navbar-form navbar-right">
					<button type="button" class="btn btn-success" onclick = "location='../../Login/Ingresar.html'" style="margin-left: 389px;">Ingresar</button>
          <button type="button" class="btn btn-success" onclick = "location='../../Registrar/Registrar.html'">Registrar</button>
				</form>
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
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="main-slide" src="../src/b.jpg" alt="Main slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
		<div class="item">
          <img class="first-slide" src="../src/d.jpeg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="../src/dt.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="../src/f.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="../src/m.jpg" alt="Fourth slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="../src/ma.jpg" alt="Fifth slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="../src/p.jpeg" alt="Sixth slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="../src/w.jpg" alt="Seventh slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
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
        <h2 style="margin-left: 450px; color: #fff;">CATALOGO DISCOS</h2>
        <a href="#about"><h2 style="margin-left: 230px; color: #fff;">DISCOS MUSIC RECORDS</h2></a>
        <a href="#about"><h2 style="margin-left: 650px; color: #fff; margin-top: -44px;">DISCOS USUARIOS</h2></a>
        <h2 style="font-size=40px;margin-left: 450px;color: #fff;width: 120px;margin-top: 21px;margin-bottom: -24px;">Géneros</h2>
        <div id= "Genero">
          <select name="txtGenero" required style="margin-left: 587px;height: 35px;margin-bottom: 55px;margin-top: -25px;">
            <option value="" selected="selected">Género</option>
            <option value='Jazz'>Jazz</option>
            <option value='K-Pop'>K-Pop</option>
            <option value='Pop'>Pop</option>
            <option value='Reggaeton'>Reggaeton</option>
            <option value='Rock'>Rock</option>
            <option value='Salsa'>Salsa</option>
          </select>
        </div>

        <?php

        $Nombre = "";
        $Artista = "";
        $Imagen = "";
        $Codigo = "";
        require_once('Conexion.php');

        $sql = "SELECT * FROM discos;";

         $rs = mysqli_query($Conexion,$sql);

         while ($row_tb=mysqli_fetch_assoc($rs)) {
           $Nombre = ($row_tb['nombre']."");
           $Artista = ($row_tb['artista']."");
           $Imagen = ($row_tb['cod_img']."");
           $Codigo = ($row_tb['codigo']."");
           $Var = '<div class="col-lg-4">';
           $Var.= '<a name="paises" id="pa"></a>';
           $Var.= '<img class="img-circle" src="../../RegistrarDisco/files/Imagenes/'.$Imagen.'" alt="Generic placeholder image" width="140" height="140">';
           $Var.= '<h2>'.$Nombre.'</h2>';
           $Var.= '<h2>'.$Artista.'</h2>';
           $Var.= '<p><a class="btn btn-default" href="Detalle.php?Codigo='.$Codigo.'" role="button">Ver Información&raquo;</a></p>';
           $Var.= '</div><!-- /.col-lg-4 -->';
           print $Var;
         }

      ?>


      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->



      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015 Dominio, Inc. &middot;</p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
