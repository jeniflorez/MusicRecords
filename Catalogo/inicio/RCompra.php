<?php
require_once('Conexion.php');

$Codigo = $_GET['Codigo'];
$Valor = $_GET['Valor'];
$Cantidad = $_GET['Cantidad'];
print $Cantidad;
$Fecha = $_GET['Fecha'];
$Can = 0;
$Val = 0;
$Can = intval($Cantidad);
$Val = intval($Valor);
$ValorVenta = intval($Val * $Can);

print $Fecha;

 $sql = "INSERT INTO ventas VALUES ('','$Fecha','$ValorVenta','$Cantidad','$Codigo','$Codigo')";

 $rs = mysqli_query($Conexion,$sql);

 if($rs== 1){
   print "Registro exitoso";
 }else{
   print "No se pudo registrar";
 }

?>
