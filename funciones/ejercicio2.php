<?php
	//Tipo función.

function numeros( $n1, $n2, $n3, $n4, $n5 )
{
$suma = $n1 + $n2 + $n3 + $n4 + $n5 ;
return $suma;
}
$tmp= numeros(2, 5, 1, 8, 10);
print "El resultado de la adición es: " . $tmp;
?>