<?php
//recording.error();
include("conexion/conexion.php") ;



$nombre = $_POST[ "nombre" ];
$apellido = $_POST[ "apellido" ];
$id         =  $_POST[ "id" ];
$correo   = $_POST[ "correo" ];

//consulta 

$sql = "INSERT INTO  usuarios ( Nombre, Apellido, DocId, Correo) 
	VALUES ( ' $nombre ' , '$apellido' , '$id' , '$correo' )";

//verificacion

if ($con ->query ($sql) === TRUE )
{
	print "    Muy bien! <br><br> " ;
}
else
{ 
	print  " ERROR " . $sql . "<br>" . $con->error ;  
} 


include( "conexion/desconexion.php" ) ;


?>


<html>

<!---hipervinculo--->

<a href="formularioInsertar.html"> Volver al Formulario  </a>

</html>