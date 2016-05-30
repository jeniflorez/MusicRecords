<?php
require_once('Conexion.php');



//Obtener valores del formulario
$Nombre_disco = $_POST['NomDisco'];
$Artista = $_POST['Artista'];
$Estado_sol = $_POST['Ano'];
$Email_cliente = $_POST['Email'];


    $sql = "SELECT codcli FROM clientes WHERE email='$Email_cliente'";
    $result = mysqli_query($Conexion,$sql);
      while ($fila = mysqli_fetch_assoc($result)){
          $Cod_cliente = $fila['codcli'];
          $sql2 = "INSERT INTO solicitud VALUES ('','$Nombre_disco','$Artista','$Estado_sol','$Cod_cliente')";
          $result2 = mysqli_query($Conexion,$sql2);
          echo 'Solicitud registrada';
      }
      if ($result!==1){
        echo 'no estas registrado';
      }
?>
