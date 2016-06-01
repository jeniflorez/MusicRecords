<?php require_once("Conexion.php"); ?>

<?php
/* @var $_POST type */
$nombre= $_POST["txtNomUsuario"];
$pass= $_POST["txtContrasenia"];

    $sql = "SELECT * FROM usuarios WHERE nombre='".$nombre."' and clave='".$pass."'";
    $result = mysqli_query($Conexion,$sql);
    $nr = mysqli_num_rows($result);
    if($nr == 1){
       $fila = mysqli_fetch_assoc($result);
       $email = $fila['nombre'];
       $sql = "SELECT codcli,nombre,apellidos FROM clientes WHERE email='$email'";
       $result2 = mysqli_query($Conexion,$sql);
       $fila2 = mysqli_fetch_assoc($result2);
       $Nom_cliente=$fila2['nombre'].' '.$fila2['apellidos'];
       $Cod_usuario=$fila['codigo'];
       $Cod_cliente=$fila2['codcli'];
       if ($Cod_usuario==1){
         print '<a href="../Catalogo/inicio/CatalogoA.php">Enlace a página de destino</a>';
       }else{
         print '<a href="../Catalogo/inicio/CatalogoU.php?codigo='.$Cod_cliente.'">Enlace a página de destino</a>';
       }

       echo "Ingresado exitosamente";
    }
    else if($nr == 0) {
    echo "No estas registrado";
    }
?>
