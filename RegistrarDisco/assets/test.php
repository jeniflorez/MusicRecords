<?php
require_once('Conexion.php');



//Obtener valores del formulario
$Codigo=$_GET['codigo'];
$NombreD = $_POST['txtNomD'];
$NombreA = $_POST['txtNomA'];
$Desc = $_POST['txtDes'];
$Valor = $_POST['txtValor'];
$Genero = $_POST['txtGenero'];
$Dia = $_POST['txtDia'];
$Mes = $_POST['txtMes'];
$Anio = $_POST['txtAnio'];
$fecha = $Anio . "-";
$fecha .=  $Mes;
$fecha .=  "-";
$fecha .=  $Dia;
$img = $_FILES["file-field"];
$Imagen = uploadFiles($img,"Imagenes");

    if ($Codigo==1){
      $sql = "INSERT INTO discos VALUES ('','$NombreD','$NombreA','$Desc','$fecha','$Valor','$Genero','$Imagen')";
      $result = mysqli_query($Conexion,$sql);
    }else{
      $sql = "INSERT INTO discos_cli VALUES ('','$NombreD','$NombreA','$Desc','$fecha','$Valor','$Genero','$Imagen')";
      $result = mysqli_query($Conexion,$sql);
    }
    if($result== 1){
      echo "Registro exitoso";
      /**uploadFiles($_FILES,"Imagenes");**/
    }else{
      echo "No se pudo registrar";
    }

    function uploadFiles($files,$folder){

    		$file=$files['name'];
    		$ext=substr($file,strrpos($file,".")+1);
         
    		$name=md5(date_default_timezone_set("Y-m-d H:i:s")).".".$ext;

    		$destino =  "files/".$folder."/".$name;

    		$file=$files['tmp_name'];
    		copy($file,$destino);
    		return $name;
    	}


?>
