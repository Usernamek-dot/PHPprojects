<?php
//Este código lo que hace es leer todos los meses que se atribuyan como valor a la variable <mes>.

$mes = 1;
switch($mes){
	case 1:
	print ("El mes es Enero.");
		break;
	case 2:
	print("El mes es Marzo.");
		break;
	case 3:
	print("El mes es Diciembre.");
		break;
	default:
	print("El mes no es ni Diciembre ni Marzo ni Enero.");
		break;
}
?>