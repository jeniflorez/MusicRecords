<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>REGISTRAR DISCO</title>

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
">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><img src="assets/img/credentials-preferences.png" alt="" width="" height="100" align=bottom><strong>Agregar disco:</strong><br/></h1>
                            <?php
                              $Cod_cliente=$_GET['codigo'];
                              if($Cod_cliente==""){
                                $html='<a href="../Home/Home.php" ><h1 style="margin-left: 280px; color: #19b9e7;"><strong>Home</strong><strong id="reg"> >Agregar disco</strong> </h1></a>';
                              }else{
                                $html='<a href="../Home/Home.php?codigo='.$Cod_cliente.'" ><h1 style="margin-left: 280px; color: #19b9e7;"><strong>Home</strong><strong id="reg"> >Agregar disco</strong> </h1></a>';
                              }
                              print $html;
                             ?>

                        </div>
                    </div>
                        <div class="col-sm-5 form-box">
                            <div class="form-bottom" style="height: 627px;">

                          <?php
                            $Codigo=$_GET['codigo'];
                            $html='<form role="form" action="test.php?codigo='.$Codigo.'" method="post" class="registration-form" enctype="multipart/form-data">';
                            print $html;
                          ?>



                              <div class="form-group  bordes-fomulario">
                              <label class="sr-only" for="Usuario"></label>
                              Nombre Disco<input type="text" name="txtNomD"  class=" form-control"  style="width: 353px;margin-left: 184px;margin-top: -39px;margin-bottom: 30px;" required >
                              </div>

                              <div class="form-group  bordes-fomulario">
                              <label class="sr-only" for="Usuario"></label>
                              Nombre Artista<input type="text" name="txtNomA"  class=" form-control"  style="width: 353px;margin-left: 184px;margin-top: -39px;margin-bottom: 30px;" required >
                              </div>


                              <div class="form-group  bordes-fomulario">
                              <label class="sr-only" for="Usuario"></label>
                              Descripción<input type="text" name="txtDes"  class=" form-control"  style="width: 353px;margin-left: 184px;margin-top: -39px;margin-bottom: 30px;" required >
                              </div>

                              <div class="form-group  bordes-fomulario">
                              <label class="sr-only" for="Usuario">Direccion</label>
                              Valor <input type="text" name="txtValor"  class=" form-control"style="width: 353px;margin-left: 184px;margin-top: -39px;margin-bottom: 30px;"required >
                              </div>

                              <div class="form-group  bordes-fomulario">
                              <label class="sr-only" for="Usuario" >Direccion</label><div class="form-top-left" style="margin-top: -10px;">
                                    Imagen
                                </div>
                             <div class="form-top-image">
                                 <input type="file" name="file-field" class="f_input" id="file-field"  required/>
                                </div>
                              </div>

                              <div class="form-group  bordes-fomulario">
                              <label class="sr-only" for="Usuario">Fecha</label>
                              <div class="form-top-left">Fecha de Lanzamiento</div>
                              <div id= "Dia" class ="form-top-right-dia">
                              <select name="txtDia" class="form-top-size"  required style="margin-left: -79px;">
                                <option value="" selected="selected">Día</option>
                                <option value='01'>01</option>
                                <option value='02'>02</option>
                                <option value='03'>03</option>
                                <option value='04'>04</option>
                                <option value='05'>05</option>
                                <option value='06'>06</option>
                                <option value='07'>07</option>
                                <option value='08'>08</option>
                                <option value='09'>09</option>
                                <option value='10'>10</option>
                                <option value='11'>11</option>
                                <option value='12'>12</option>
                                <option value='13'>13</option>
                                <option value='14'>14</option>
                                <option value='15'>15</option>
                                <option value='16'>16</option>
                                <option value='17'>17</option>
                                <option value='18'>18</option>
                                <option value='19'>19</option>
                                <option value='20'>20</option>
                                <option value='21'>21</option>
                                <option value='22'>22</option>
                                <option value='23'>23</option>
                                <option value='24'>24</option>
                                <option value='25'>25</option>
                                <option value='26'>26</option>
                                <option value='27'>27</option>
                                <option value='28'>28</option>
                                <option value='29'>29</option>
                                <option value='30'>30</option>
                                <option value='31'>31</option>
                                </select>
                              </div>
                                  <div id= "Mes" class="form-top-right-mes">
                                <select name="txtMes" class="form-top-size"  required style="margin-left: -73px;">
                                  <option value="" selected="selected">Mes</option>
                                  <option value='01'>Enero</option>
                                  <option value='02'>Febrero</option>
                                  <option value='03'>Marzo</option>
                                  <option value='04'>Abril</option>
                                  <option value='05'>Mayo</option>
                                  <option value='06'>Junio</option>
                                  <option value='07'>Julio</option>
                                  <option value='08'>Agosto</option>
                                  <option value='09'>Septiembre</option>
                                  <option value='10'>Octubre</option>
                                  <option value='11'>Noviembre</option>
                                  <option value='12'>Diciembre</option>
                                </select>
                              </div>
                              <div id= "Anio" class="form-top-right-anio">
                              <select name="txtAnio" class="form-top-size"  required style="margin-left: -65px;">
                                <option value="" selected="selected">Año</option>
                                <option value='2016'>2016</option>
                                <option value='2015'>2015</option>
                                <option value='2014'>2014</option>
                                <option value='2013'>2013</option>
                                <option value='2012'>2012</option>
                                <option value='2011'>2011</option>
                                <option value='2010'>2010</option>
                                <option value='2009'>2009</option>
                                <option value='2008'>2008</option>
                                <option value='2007'>2007</option>
                                <option value='2006'>2006</option>
                                <option value='2005'>2005</option>
                                <option value='2004'>2004</option>
                                <option value='2003'>2003</option>
                                <option value='2002'>2002</option>
                                <option value='2001'>2001</option>
                                <option value='2000'>2000</option>
                                <option value='1999'>1999</option>
                                <option value='1998'>1998</option>
                                <option value='1997'>1997</option>
                                <option value='1996'>1996</option>
                                <option value='1995'>1995</option>
                                <option value='1994'>1994</option>
                                <option value='1993'>1993</option>
                                <option value='1992'>1992</option>
                                <option value='1991'>1991</option>
                                <option value='1990'>1990</option>
                                <option value='1989'>1989</option>
                                <option value='1988'>1988</option>
                                <option value='1987'>1987</option>
                                <option value='1986'>1986</option>
                                <option value='1985'>1985</option>
                                <option value='1984'>1984</option>
                                <option value='1983'>1983</option>
                                <option value='1982'>1982</option>
                                <option value='1981'>1981</option>
                                <option value='1980'>1980</option>
                                <option value='1979'>1979</option>
                                <option value='1978'>1978</option>
                                <option value='1977'>1977</option>
                                <option value='1976'>1976</option>
                                <option value='1975'>1975</option>
                                <option value='1974'>1974</option>
                                <option value='1973'>1973</option>
                                <option value='1972'>1972</option>
                                <option value='1971'>1971</option>
                                <option value='1970'>1970</option>
                                <option value='1969'>1969</option>
                                <option value='1968'>1968</option>
                                <option value='1967'>1967</option>
                                <option value='1966'>1966</option>
                                <option value='1965'>1965</option>
                                <option value='1964'>1964</option>
                                <option value='1963'>1963</option>
                                <option value='1962'>1962</option>
                                <option value='1961'>1961</option>
                                <option value='1960'>1960</option>
                                <option value='1959'>1959</option>
                                <option value='1958'>1958</option>
                                <option value='1957'>1957</option>
                                <option value='1956'>1956</option>
                                <option value='1955'>1955</option>
                                <option value='1954'>1954</option>
                                <option value='1953'>1953</option>
                                <option value='1952'>1952</option>
                                <option value='1951'>1951</option>
                                <option value='1950'>1950</option>
                                <option value='1949'>1949</option>
                                <option value='1948'>1948</option>
                                <option value='1947'>1947</option>
                                <option value='1946'>1946</option>
                                <option value='1945'>1945</option>
                                <option value='1944'>1944</option>
                                <option value='1943'>1943</option>
                                <option value='1942'>1942</option>
                                <option value='1941'>1941</option>
                                <option value='1940'>1940</option>
                                <option value='1939'>1939</option>
                                <option value='1938'>1938</option>
                                <option value='1937'>1937</option>
                                <option value='1936'>1936</option>
                              </select>
                            </div>
                              </div>

                              <div class="form-group  bordes-fomulario">
                              <label class="sr-only" for="Usuario">Fecha</label>
                              <div class="form-top-left">Género</div>
                              <div id= "Genero" class="form-top-right-dia">
                                <select name="txtGenero" class="form-top-size" required style="margin-left: -78px;">
                                  <option value="" selected="selected">Género</option>
                                  <option value='Jazz'>Jazz</option>
                                  <option value='K-Pop'>K-Pop</option>
                                  <option value='Pop'>Pop</option>
                                  <option value='Reggaeton'>Reggaeton</option>
                                  <option value='Rock'>Rock</option>
                                  <option value='Salsa'>Salsa</option>
                                </select>
                              </div>
                            </div>
			                        <button type="submit" class="btn" style="float: right;margin-top: 64px;">Registrar disco</button>

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
