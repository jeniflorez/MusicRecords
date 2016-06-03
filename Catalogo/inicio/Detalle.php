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
                <?php
                    require_once('Conexion.php');

                    $Cod_cliente=$_GET['codigo'];
                    if ($Cod_cliente==""){
                      $html='<li><a href="../../Home/Home.php">Home</a></li>';
                      $html.='<li class="active"><a href="CatalogoU.php">Catálogo</a></li>';
                      $html.='<li><a href="../../Solicitar/Solicitud.php">Solicitar Disco</a></li>';
                      $html.='<li><a href="../../RegistrarDisco/RegDisco.php">Venta Disco</a></li>';
                      $html.='<form class="navbar-form navbar-right">';
                      $html.='<li><a href="../../Login/Ingresar.html" class="button" style="background-color: #5cb0b8;
                          border-radius: 4px;
                          border: 1px solid transparent;
                          display: inline-block;
                          padding: 6px 12px;
                          margin-bottom: 0;
                          font-size: 14px;
                          font-weight: 400;
                          line-height: 1.42857143;
                          text-align: center;
                          white-space: nowrap;
                          vertical-align: middle;
                          touch-action: manipulation;
                          cursor: pointer;
                          -webkit-user-select: none;margin-left: 409px;">Ingresar</a></li>';
                      $html.='<li style="height: 0px;"><a href="../../Registrar/Registrar.html" class="button" style="background-color: #5cb0b8;
                          border-radius: 4px;
                          border: 1px solid transparent;
                          display: inline-block;
                          padding: 6px 12px;
                          margin-bottom: 0;
                          font-size: 14px;
                          font-weight: 400;
                          line-height: 1.42857143;
                          text-align: center;
                          white-space: nowrap;
                          vertical-align: middle;
                          touch-action: manipulation;
                          cursor: pointer;
                          -webkit-user-select: none;margin-left: 496px; margin-top: -56px;">Registrar</a></li>';
                      $html.='</form>';
                      print $html;
                    }else if ($Cod_cliente==1){
                      $html='<li><a href="../../Home/Home.php?codigo='.$Cod_cliente.'">Home</a></li>';
                      $html.='<li class="active"><a href="CatalogoA.php">Catálogo</a></li>';
                      $html.='<li><a href="../../Solicitar/Solicitud.php?codigo='.$Cod_cliente.'">Solicitar Disco</a></li>';
                      $html.='<li><a href="../../RegistrarDisco/RegDisco.php?codigo='.$Cod_cliente.'">Venta Disco</a></li>';
                      $html.='<ul class="nav">';
                      $html.='<li><a href="" style="margin-top: -39px; margin-left: 604px;">Ingresado como ADMINISTRADOR</a>';
                      $html.='<ul><li><a href="../../Perfil/inicio/PerfilA.php" style="margin-left:700px;width: 84px;">Perfil</a></li>';
                      $html.='<li><a href="../../Home/Home.php" style="margin-left: 700px;width: 84px;">Salir</a></li>';
                      $html.='</ul></li></ul>';
                      print $html;
                    }else{
                      $sql = "SELECT codcli,nombre,apellidos FROM clientes WHERE codcli=$Cod_cliente";
                      $result = mysqli_query($Conexion,$sql);
                      $fila = mysqli_fetch_assoc($result);
                      $Nom_cliente=$fila['nombre'].' '.$fila['apellidos'];
                      $html='<li><a href="../../Home/Home.php?codigo='.$Cod_cliente.'">Home</a></li>';
                      $html.='<li class="active"><a href="CatalogoU.php?codigo='.$Cod_cliente.'">Catálogo</a></li>';
                      $html.='<li><a href="../../Solicitar/Solicitud.php?codigo='.$Cod_cliente.'">Solicitar Disco</a></li>';
                      $html.='<li><a href="../../RegistrarDisco/RegDisco.php?codigo='.$Cod_cliente.'">Venta Disco</a></li>';
                      $html.='<ul class="nav">';
                      $html.='<li><a href="" style="margin-top: -39px; margin-left: 604px;">Ingresado como '.$Nom_cliente.'</a>';
                      $html.='<ul><li><a href="../../Perfil/inicio/PerfilU.php?codigo='.$Cod_cliente.'" style="margin-left:700px;width: 84px;">Perfil</a></li>';
                      $html.='<li><a href="../../Home/Home.php" style="margin-left: 700px;width: 84px;">Salir</a></li>';
                      $html.='</ul></li></ul>';
                      print $html;
                    }
                 ?>

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
        <h2 style="margin-left: 468px; color: #fff;margin-bottom: 37px;">INFORMACIÓN DISCO</h2>



        </div>

        <?php
        $Codigo = $_GET['Codigo'];
        $Codigo_cliente = $_GET['codigo'];
        $tipo = $_GET['tipo'];
        $Nombre = "";
        $Artista = "";
        $Imagen = "";
        require_once('Conexion.php');

        if($tipo==1){
          $sql = "SELECT * FROM discos ". "WHERE codigo='".$Codigo."'";
        }else{
          $sql = "SELECT * FROM discos_cli ". "WHERE codigo='".$Codigo."'";
        }


         $rs = mysqli_query($Conexion,$sql);

         while ($row_tb=mysqli_fetch_assoc($rs)) {
           $Nombre = ($row_tb['nombre']."");
           $Artista = ($row_tb['artista']."");
           $Imagen = ($row_tb['cod_img']."");
           $Descripcion = ($row_tb['descripcion']."");
           $Fecha = ($row_tb['fecha']."");
           $Valor = ($row_tb['valor_disco']."");
           $Genero = ($row_tb['genero']."");
           $Var = '<div class="col-lg-4" style = "margin-left:410px;">';
           $Var.= '<a name="paises" id="pa"></a>';
           $Var.= '<img class="img-circle" src="../../RegistrarDisco/files/Imagenes/'.$Imagen.'" alt="Generic placeholder image" width="140" height="140">';
           $Var.= '<h2 style="color: #fff;">Nombre Disco :</h2><p style="font-size: 20px;">'.$Nombre.'</p>';
           $Var.= '<h2 style="color: #fff;">Nombre Artista :</h2><p style="font-size: 20px;">'.$Artista.'</p>';
           $Var.= '<h2 style="color: #fff;">Descripción :</h2><p style="font-size: 20px;">'.$Descripcion.'</p>';
           $Var.= '<h2 style="color: #fff;">Fecha de lanzamiento :</h2><p style="font-size: 20px;">'.$Fecha.'</p>';
           $Var.= '<h2 style="color: #fff;">Valor :</h2><p style="font-size: 20px;">$'.$Valor.'</p>';
           $Var.= '<h2 style="color: #fff;">Género :</h2><p style="font-size: 20px;">'.$Genero.'</p>';
           $Var.= '<p><a class="btn btn-default" style ="margin-top: 16px;"href="Compra.php?Codigo='.$Codigo.'&Imagen='.$Imagen.'&Nombre='.$Nombre.'&Artista='.$Artista.'&Valor='.$Valor.'&codigo='.$Codigo_cliente.'" role="button">Comprar&raquo;</a></p>';
           $Var.= '</div><!-- /.col-lg-4 -->';
           print $Var;
         }

        /*<div class="col-lg-4">
			<a name="paises" id="pa"></a>
          <img class="img-circle" src="../src/alemania.jpg" alt="Generic placeholder image" width="140" height="140">

          <h2>Alemania</h2>
		  <p>Disfruta de todos los estudios que Alemania tiene para ti, dirígete a su sección para saber mas.</p>
          <p><a class="btn btn-default" href="#alemania" role="button">Ver Alemania&raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../src/espana-bandera.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>España</h2>
          <p>Lider en el entretenimiento, averigua más sobre ellos.</p>
          <p><a class="btn btn-default" href="#espana" role="button">Ver España &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../src/holanda-bandera.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Holanda</h2>
          <p>Conocidos por su ambiente tranquilo y comportamiento pacifista. Conoce a Holanda.</p>
          <p><a class="btn btn-default" href="#holanda" role="button">Ver Holanda &raquo;</a></p>
        </div><!-- /.col-lg-4 -->*/

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
