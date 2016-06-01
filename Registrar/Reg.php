<?php
require_once('Conexion.php');



//Obtener valores del formulario
$Nombre = $_POST['txtNom'];
$Apellidos = $_POST['txtApe'];
$Cedula = $_POST['txtCed'];
$Email = $_POST['txtEmail'];
$Contrasenia = $_POST['txtCont'];
$Pais = $_POST['txtPais'];
$Sexo = $_POST['optradio'];
$Telefono = $_POST['txtTel'];
$Dia = $_POST['txtDia'];
$Mes = $_POST['txtMes'];
$Anio = $_POST['txtAnio'];
$Direccion = $_POST['txtDir'];
$fecha = $Anio . "-";
$fecha .=  $Mes;
$fecha .=  "-";
$fecha .=  $Dia;

    $sql = "INSERT INTO clientes VALUES ('','$Cedula','$Nombre','$Apellidos','$Email','$Contrasenia','$Pais','$Sexo','$Telefono','$Direccion','$fecha')";

    $result = mysqli_query($Conexion,$sql);

    if($result== 1){
      echo "Registro exitoso";
      $sql = "INSERT INTO usuarios VALUES ('','$Email','$Contrasenia')";
      $result2 = mysqli_query($Conexion,$sql);
    }else{
      echo "No se pudo registrar";
    }

?>
