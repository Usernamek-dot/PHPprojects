<?php

include "conexion.php";

//en estas variables se trae toda la informacion que cambió  y que se recogió en ACTUALIZAR.PHP
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];

//se actualiza  la informacion en  la bd
$update =  $conexion -> query (" UPDATE  persona SET nombre='$nombre' , apellido='$apellido' , correo='$correo' WHERE id='$id' ");

if($update)  { print "<script>   location.href='formulario.php' ; </script>";	 } //si se realizo la consulta que guarde y me devuelva al form
else { echo "<script>   location.href='actualizar.php?id=". $id ." ' ; </script>  " ;	 } // si no, se devuelve a ACTUALIZAR.PHP
?>