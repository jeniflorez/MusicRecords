<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SOLICITAR DISCO</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		    <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="logo.png">
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
                <img src="logos.png" alt="" width="" height="100"><br/>
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

                            <h1><img src="credentials-preferences.png" alt="" width="" height="100" align=bottom><strong>Solicitar disco:</strong><br/></h1>
                            <a href="../Home/Home.html" ><h1 style="margin-left: 280px; color: #19b9e7;"><strong>Home</strong><strong id="reg"> >Solicitar disco</strong> </h1></a>
                        </div>

                    </div>
                        <div class="col-sm-5 form-box">
                            <div class="form-bottom">
			                    <form name="formulario" action="" onSubmit="enviarDatos(); return false" style="margin-left: 57px;">
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

                            <div class="form-group  bordes-fomulario">
                            Mensaje<input type="text" id = "Mensaje" name="Mensaje"  class=" form-control"  style="width: 300px;margin-left: 184px;margin-top: -39px;margin-bottom: 30px;" required >
                            </div>
                            <button type="submit" class="btn" style="margin-left: 388px;">Solicitar</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <script type="text/javascript">

            	function objetoAjax(){
            		var xmlhttp = false;
            		try {
            			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            		} catch (e) {

            			try {
            				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            			} catch (E) {
            				xmlhttp = false; }
            		}

            		if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
            		  xmlhttp = new XMLHttpRequest();
            		}
            		return xmlhttp;
            	}
              function enviarDatos(){

                //Recogemos los valores introducimos en los campos de texto
        		NomDisco = document.formulario.txtNomDisco.value;
        		Artista = document.formulario.txtArtista.value;
            Ano = document.formulario.txtAño.value;
        		Email = document.formulario.txtEmail.value;

                 //Aquí será donde se mostrará el resultado
        		Mensaje = document.getElementById('Mensaje');

        		//instanciamos el objetoAjax
        		ajax = objetoAjax();

        		//Abrimos una conexión AJAX pasando como parámetros el método de envío, y el archivo que realizará las operaciones deseadas
        		ajax.open("POST", "solicitar.php", true);

        		//cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
        		ajax.onreadystatechange = function() {

                     //Cuando se completa la petición, mostrará los resultados
        			if (ajax.readyState == 4){

        				//El método responseText() contiene el texto de nuestro 'consultar.php'. Por ejemplo, cualquier texto que mostremos por un 'echo'
        				Mensaje.value = (ajax.responseText)
        			}
        		}

        		//Llamamos al método setRequestHeader indicando que los datos a enviarse están codificados como un formulario.
        		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        		//enviamos las variables a 'consulta.php'
        		ajax.send("&NomDisco="+NomDisco+"&Artista="+Artista+"&Ano="+Ano+"&Email="+Email)

        }

        </script>


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
