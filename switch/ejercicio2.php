<?php
$tipoMotor = 3;
switch($tipoMotor){
	case 0:
	print "No hay establecido una valor definido para el tipo de bomba.";
	break;

	case 1: 
	print "La bomba es una bomba de agua.";
	break;

	case 2: 
	print "La bomba es una bomba de gasolina.";
	break;

	case 3: 
	print "La bomba es una bomba de hormigón.";
	break;

	case 4:
	print  "La bomba es una bomba de pasta alimenticia.";
	break;

	default:
	print "No existe un valor válido para el tipo de bomba.";
	break;
}
?>