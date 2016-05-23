<?php
    $Conexion = mysqli_connect("localhost","root","","db_musicrecords");
    if ($Conexion) {
    }else{
      echo "La conexion no se efectuó";
    }
?>
