<?php

include "conexion.php";

$id = $_REQUEST["id"]; //se trae el Id

$delete = $conexion -> query(" DELETE FROM  persona WHERE  id=". $id ); //se crea la consulta para que BORRE (DELETE) en la bd
if($delete) {  print " <script> location.href='formulario.php' ; </script> ";	} //si se ejecutó me envia a formulario
else { print " <script> alert('No se eliminó el registro'); location.href='formulario.php'; </script> ";}//si no, saca una alerta

?>