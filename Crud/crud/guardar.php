<?php

include 'conexion.php' ;

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];

$insertar = $conexion -> query( " INSERT INTO persona  (nombre,apellido,correo) VALUES ('$nombre', '$apellido', '$correo') ");

if($insertar){ print " su registro se guardó" ;}
else{ print "su registro no se  guardó." ; }

print " <h4> <a href = 'formulario.php'>Regresa al formulario</a></h4>";
?>