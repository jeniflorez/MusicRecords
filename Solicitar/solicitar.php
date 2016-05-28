<?php
require_once('Conexion.php');



//Obtener valores del formulario
$Nombre_disco = $_POST['txtNomDisco'];
$Artista = $_POST['txtArtista'];
$Estado_sol = $_POST['txtAño'];
$Email_cliente = $_POST['txtEmail'];


    $sql = "SELECT codcli FROM clientes WHERE email='$Email_cliente'";
    $result = mysqli_query($Conexion,$sql);
      while ($fila = mysqli_fetch_assoc($result)){
          $Cod_cliente = $fila['codcli'];
          $sql2 = "INSERT INTO solicitud VALUES ('','$Nombre_disco','$Artista','$Estado_sol','$Cod_cliente')";
          $result2 = mysqli_query($Conexion,$sql2);
          echo 'Solicitud registrada';
          $ban=1;
      }
      if ($ban!==1){
        echo 'no estas registrado';
      }


  /*  $sql = "INSERT INTO solicitud VALUES ('$Nombre_disco','$Artista','$Estado_sol','$Cod_cliente')";

    $result = mysqli_query($Conexion,$sql);

    if($result== 1){
      echo "Registro exitoso";
    }else{
      echo "No se pudo registrar";
    }*/

?>
