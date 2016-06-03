<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MENSAJE</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		    <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <style type="text/css">
          .textoborde {
            font-size:60px;
            font-weight:bold;
            -webkit-text-fill-color: #fff;
            -webkit-text-stroke-color: black;
            -webkit-text-stroke-width: 0.30px;
          }
      </style>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">


						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-social">
                <img src="assets/img/logo.png" alt="" width="" height="100"><br/>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">

<?php
require_once('Conexion.php');



//Obtener valores del formulario
$Publicidad = $_POST['txtPub'];
$img = $_FILES["file-field"];

    if ($Publicidad==01){
      $Imagen = uploadFiles($img,"h.jpg");
        print $mensaje='<span class="textoborde">Publicidad 1 agregada exitosamente</span>';
        $html='<li><a href="../Catalogo/inicio/CatalogoA.php" class="button" style="background-color: #5cb0b8;
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
            -webkit-user-select: none;margin-left: -19px;color: #fff;">Aceptar</a></li>';


      print $html;
    }else{
        print $mensaje='<span class="textoborde">Publicidad 2 agregada exitosamente</span>';
      $Imagen = uploadFiles($img,"l.jpg");
      $html='<li><a href="../Catalogo/inicio/CatalogoA.php" class="button" style="background-color: #5cb0b8;
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
          -webkit-user-select: none;margin-left: -19px;color: #fff;">Aceptar</a></li>';


    print $html;
    }


    function uploadFiles($files,$name){

    		$destino =  "../Catalogo/src/".$name;

    		$file=$files['tmp_name'];
    		copy($file,$destino);
    		return $name;
    	}


?>
</div>

</div>
<!--<div class="col-sm-5 form-box">
    <div class="form-bottom">
  <form name="formulario" action="solicitar.php" method="post" style="margin-left: 57px;">
    <div class="form-group  bordes-fomulario">
    Nombre disco<input type="text" name="txtNomDisco"  class=" form-control"  style="width: 300px;margin-left: 184px;margin-top: -39px;margin-bottom: 30px;" required >
    </div>
    <div class="form-group  bordes-fomulario">
    Artista<input type="text" name="txtArtista"  class=" form-control"  style="width: 300px;margin-left: 184px;margin-top: -39px;margin-bottom: 30px;" required >
    </div>
    <div class="form-group  bordes-fomulario">
    Año<input type="text" name="txtAño"  class=" form-control"  style="width: 300px;margin-left: 184px;margin-top: -39px;margin-bottom: 30px;" required >
    </div>
    <div class="form-group  bordes-fomulario">
    Email<input type="text" name="txtEmail"  class=" form-control"  style="width: 300px;margin-left: 184px;margin-top: -39px;margin-bottom: 30px;" required >
    </div>
    <button type="submit" class="btn" style="margin-left: 388px;">Solicitar</button>
  </form>
</div>
</div>-->
</div>
</div>
</div>

</div>


<!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/retina-1.1.0.min.js"></script>
<script src="assets/js/scripts.js"></script>

<!--[if lt IE 10]>
<script src="assets/js/placeholder.js"></script>
<![endif]-->

</body>

</html>
