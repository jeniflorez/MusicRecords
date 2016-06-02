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

        <style type="text/css">
        #texto font .abaDer {display:inline; position:absolute; top:+1px; left:+1px; z-index:-1; color:#0f0; }
        #texto font .arrIzq {display:inline; position:absolute; top:-1px; left:-1px; z-index:-1; color:#fff; }
        </style>

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

                        </div>
                    </div>
                        <div class="col-sm-5 form-box">
                          <?php
                        require_once('Conexion.php');



                        //Obtener valores del formulario
                        $Codigo=$_GET['codigo'];
                        $NombreD = $_POST['txtNomD'];
                        $NombreA = $_POST['txtNomA'];
                        $Desc = $_POST['txtDes'];
                        $Valor = $_POST['txtValor'];
                        $Genero = $_POST['txtGenero'];
                        $Dia = $_POST['txtDia'];
                        $Mes = $_POST['txtMes'];
                        $Anio = $_POST['txtAnio'];
                        $fecha = $Anio . "-";
                        $fecha .=  $Mes;
                        $fecha .=  "-";
                        $fecha .=  $Dia;
                        $img = $_FILES["file-field"];
                        $Imagen = uploadFiles($img,"Imagenes");

                        if($Codigo==1){
                          $sql = "INSERT INTO discos VALUES ('','$NombreD','$NombreA','$Desc','$fecha','$Valor','$Genero','$Imagen')";
                        }else{
                          $sql = "INSERT INTO discos_cli VALUES ('','$NombreD','$NombreA','$Desc','$fecha','$Valor','$Genero','$Imagen','$Codigo')";
                        }

                              $result = mysqli_query($Conexion,$sql);

                            if($result== 1){
                              print $mensaje='<span class="textoborde">Registro exitoso</span>';
                              if($Codigo==1){
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
                              }else{
                                $html='<li><a href="../Catalogo/inicio/CatalogoU.php?codigo='.$Codigo.'" class="button" style="background-color: #5cb0b8;
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
                              }
                              print $html;

                            }else{
                              print $mensaje='<span class="textoborde">No se pudo registrar</span>';

                              $html='<li><a href="../Login/Ingresar.html" class="button" style="background-color: #5cb0b8;
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



                            function uploadFiles($files,$folder){

                            		$file=$files['name'];
                            		$ext=substr($file,strrpos($file,".")+1);

                            		$name=md5(@date("Y-m-d H:i:s")).".".$ext;


                            		$destino =  "files/".$folder."/".$name;

                            		$file=$files['tmp_name'];
                            		copy($file,$destino);
                            		return $name;
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
