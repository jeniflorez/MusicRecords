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
       $Cod_cliente = $fila['codigo'];

       print '<a href="../Catalogo/inicio/Catalogo.php?codigo='.$Cod_cliente.'">Enlace a página de destino</a>';
       echo "Ingresado exitosamente";
    }
    else if($nr == 0) {
    echo "No estas registrado";
    }
?>
