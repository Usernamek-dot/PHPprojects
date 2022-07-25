<?php

$nombreServidor = "localhost" ;
$nombreUser = "root" ;
$pass = "";
$nombreBd = "administradores" ;

//conexion a la bd

$con = new mysqli( $nombreServidor , $nombreUser , $pass , $nombreBd  ) ;

//Verificar conexion

if($con )
{
	//die (  " Exito en la conección :" . $con->connect_error ) ;
	print "Exito en la conección a la base de datos," ;
} 
else
{
	print "NO FUNCIONA";
}

?>