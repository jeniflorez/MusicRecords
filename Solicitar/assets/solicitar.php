<?php
require_once('Conexion.php');



//Obtener valores del formulario
$Nombre_disco = $_POST['txtNomDisco'];
$Artista = $_POST['txtArtista'];
$Estado_sol = $_POST['txtAño'];
$Email_cliente = $_POST['txtEmail'];


    $sql = "SELECT codcli FROM clientes WHERE email='$Email_cliente'";
    $result = mysqli_query($Conexion,$sql);
    $nr = mysqli_num_rows($result);
    if($nr == 1){
      while ($fila = mysqli_fetch_assoc($result)){
          $Cod_cliente = $fila['codcli'];
          $sql2 = "INSERT INTO solicitud VALUES ('','$Nombre_disco','$Artista','$Estado_sol','$Cod_cliente')";
          $result2 = mysqli_query($Conexion,$sql2);
          echo "Solicitud registrada";
      }
    }
    else if($nr == 0) {
     echo "No estas registrado";
    }
?>
