<?php
require_once('Conexion.php');


$Codigo = "";
//Obtener valores del formulario
$Disco = $_POST['txtDisco'];
$Artista = $_POST['txtArtista'];
$Anio = $_POST['txtAnio'];
$Cedula = $_POST['txtCed'];

    $query=("SELECT codcli FROM `clientes` "
             . "WHERE cedula='".$Cedula."'");

    $rs= mysqli_query($Conexion ,$query);

    while ($row_tb=mysqli_fetch_assoc($rs)) {
      $Codigo = ($row_tb['codcli']."");
    }

    echo $Codigo;

    $sql = "INSERT INTO solicitud VALUES ('','$Disco','$Artista','Recibida','$Anio','$Codigo')";

    $result = mysqli_query($Conexion,$sql);

    if($result== 1){
      echo "Registro exitoso";
    }else{
      echo "No se pudo registrar";
    }

?>
