<?php

error_reporting(0);

$nombre = 	$_POST["nombre"];
$apellido = 	$_POST["apellido"];
$documento = 	$_POST["documento"];
$genero = 	$_POST["genero"];
$telefono = 	$_POST["telefono"];
$correo = 	$_POST["correo"];
$direccion = 	$_POST["direccion"];

$pasatiempos = 	$_POST["pasatiempos"];
$deportes = 	$_POST["deportes"];

$comentario = 	$_POST["comentario"];
	
					//VALIDACIÓN DE FORMULARIO

$error = array();

if( $nombre == "" )
{ array_push($error, "Error, llena el campo <b>Nombre</b>" ); }

if( $apellido == "" )
{ array_push($error, "Error, llena el campo <b>Apellido</b>" ); }

if( $documento == "" )
{ array_push($error, "Error, llena el campo <b>Documento de Identidad</b>" ); }

if( $genero == "" )
{ array_push($error, "Error, llena el campo <b>Género</b> "); }

if( $telefono == "" )
{ array_push($error, "Error, llena el campo <b>Teléfono</b>"); }

if( $correo == "" )
{ array_push($error, "Error, llena el campo <b>Correo</b>"); }

if( $direccion == "" )
{ array_push($error, "Error, llena el campo <b>Dirección</b>"); }

if( $comentario == "" )
{ array_push($error, "Error, llena el campo <b>Perfil Profesional</b>"); }

if( count($error) > 0 )
{ print "<ul>"; 
	foreach($error as $key => $value)
	{
	print "<li>" . $value . "</li>" ;
	}
 print "</ul>" ;
}  else
{
print "<h1> Bienvenido/a " . $nombre ." , aquí estan los resultados de el formulario que llenaste hace un momento: </h1> " ;

print "Tu apellido es :  " . $apellido . "<br><br>" ;

print "Tu  tipo de documento de indentidad es :   " . $documento . "<br><br>" ;

print " Eres  :   " . $genero . "<br><br>" ;

print "Tu  teléfono es :   " . $telefono . "<br><br>" ;

print "Tu  correo es :   " . $correo . "<br><br>" ;

print "Y tu dirección es :   " . $documento . "<br><br>" ;


print "Tus pasatiempos son :    <br>" ;
	
	print "<ol>" ;

	foreach($pasatiempos as $key => $value )
	{ print "<li>" . $value . "</li>"  ;}
	print "</ol>" ;


print "Los deportes que practicas son :  <br><br>" ;

	foreach($deportes as $key => $value )
	{ print "<li>" . $value . "</li>"  ; }  
}

?>