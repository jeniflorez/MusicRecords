<?php require_once("Conexion.php"); ?>

<?php
/* @var $_POST type */
$nombre= $_POST["txtEmail"];
$pass= $_POST["txtContrasenia"];
/*La busqueda en la base de datos se realiza de este modo para evitar las inyecciones sql*/
$query=("SELECT email,contrasena FROM `clientes` "
             . "WHERE email='".$nombre."' and "
             . "`contrasena`='".$pass."'");

$rs= mysqli_query($Conexion ,$query);
/*$row=mysqli_fetch_object($rs);*/
$nr = mysqli_num_rows($rs);
if($nr == 1){
   echo "Ingresado exitosamente";
}
else if($nr == 0) {
   echo "No ingreso";
}
?>
