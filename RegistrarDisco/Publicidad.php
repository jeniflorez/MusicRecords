<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AGREGAR PUBLICIDAD</title>

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

                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><img src="assets/img/credentials-preferences.png" alt="" width="" height="100" align=bottom><strong>Agregar publicidad:</strong><br/></h1>
                            <?php
                              $Cod_cliente=$_GET['codigo'];
                              if($Cod_cliente==""){
                                $html='<a href="../Home/Home.php" ><h1 style="margin-left: 280px; color: #19b9e7;"><strong>Home</strong><strong id="reg"> >Agregar Publicidad</strong> </h1></a>';
                              }else{
                                $html='<a href="../Home/Home.php?codigo='.$Cod_cliente.'" ><h1 style="margin-left: 280px; color: #19b9e7;"><strong>Home</strong><strong id="reg"> >Agregar Publicidad</strong> </h1></a>';
                              }
                              print $html;
                             ?>

                        </div>
                    </div>
                        <div class="col-sm-5 form-box">
                            <div class="form-bottom" style="height: 369px;">

                          <?php
                            $Codigo=$_GET['codigo'];
                            $html='<form role="form" action="Pub.php?codigo='.$Codigo.'" method="post" class="registration-form" enctype="multipart/form-data">';
                            print $html;
                          ?>



                          <div class="form-group  bordes-fomulario">
                          <label class="sr-only" for="Usuario">Codigo</label>
                          <div class="form-top-left">Código Publicidad</div>
                          <div id= "Dia" class ="form-top-right-dia">
                          <select name="txtPub" class="form-top-size"  required style="margin-left: -79px;">
                            <option value="" selected="selected">Código</option>
                            <option value='01'>01</option>
                            <option value='02'>02</option>
                            </select>
                          </div>
                          </div>


                              <div class="form-group  bordes-fomulario">
                              <label class="sr-only" for="Usuario" >Direccion</label><div class="form-top-left" style="margin-top: -10px;">
                                    Imagen
                                </div>
                             <div class="form-top-image">
                                 <input type="file" name="file-field" class="f_input" id="file-field"  required/>
                                </div>
                              </div>

			                        <button type="submit" class="btn" style="float: right;margin-top: -10px;margin-top: -3px;margin-right: 70px;">Agregar Publicidad</button>

			                    </form>

                        </div>
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
