<?php
require_once('Conexion.php');

$sql = "SELECT * FROM discos;";

 $result = mysqli_query($Conexion,$sql);

 if($row= mysql_fetch_array($rs)){

   //echo   "<div class="col-lg-4">";
   //echo "<img class="img-circle" src="../src/alemania.jpg" alt="Generic placeholder image" width="140" height="140">";
   echo "<h2>Alemania</h2>";
  // echo  <p><a class="btn btn-default" href="#alemania" role="button">Ver Alemania&raquo;</a></p>";
   echo   </div>;
 }

?>
