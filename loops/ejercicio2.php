<?php
print "<h3>Do While</h3>";
	print "<h3>A.</h3>";
$cantidad = 50;
do{
print $cantidad-- . " ";
}while($cantidad>39);

	print "<h3>B.</h3>";
$contador = 1;
do{
$incremento = $contador++ * 2 ;
print $incremento ." ";
}while($contador < 6);

?>