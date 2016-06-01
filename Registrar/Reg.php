<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MENSAJE</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
		    <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

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
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
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
                      <?php
                      require_once('Conexion.php');



                      //Obtener valores del formulario
                      $Nombre = $_POST['txtNom'];
                      $Apellidos = $_POST['txtApe'];
                      $Cedula = $_POST['txtCed'];
                      $Email = $_POST['txtEmail'];
                      $Contrasenia = $_POST['txtCont'];
                      $Pais = $_POST['txtPais'];
                      $Sexo = $_POST['optradio'];
                      $Telefono = $_POST['txtTel'];
                      $Dia = $_POST['txtDia'];
                      $Mes = $_POST['txtMes'];
                      $Anio = $_POST['txtAnio'];
                      $Direccion = $_POST['txtDir'];
                      $fecha = $Anio . "-";
                      $fecha .=  $Mes;
                      $fecha .=  "-";
                      $fecha .=  $Dia;

                          $sql = "INSERT INTO clientes VALUES ('','$Cedula','$Nombre','$Apellidos','$Email','$Contrasenia','$Pais','$Sexo','$Telefono','$Direccion','$fecha')";

                          $result = mysqli_query($Conexion,$sql);

                          if($result== 1){

                            $sql = "INSERT INTO usuarios VALUES ('','$Email','$Contrasenia')";
                            $result2 = mysqli_query($Conexion,$sql);

                            print $mensaje='<h1 style="margin-top: -67px;
                            margin-left: 19px;;"><strong>Registro exitoso</strong></h1>';

                              $html='<li><a href="../Home/Home.php" class="button" style="background-color: #5cb0b8;
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
                                  -webkit-user-select: none;margin-left: 17px;
                                  margin-top: 10px;;color: #fff;">Aceptar</a></li>';


                            print $html;
                          }else{
                            print $mensaje='<h1 style="margin-top: -67px;
                            margin-left: 19px;;"><strong>No se pudo registrar</strong></h1>';

                            $html='<li><a href="../Home/Home.php" class="button" style="background-color: #5cb0b8;
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
                                -webkit-user-select: none;margin-left: 17px;
                                margin-top: 10px;;color: #fff;">Aceptar</a></li>';
                            print $html;
                          }


                      ?>


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
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
