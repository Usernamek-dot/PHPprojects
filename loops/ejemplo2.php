<?php
print "<h3> Explicacion del ciclo Do While </h3><br>";
print "El bucle do while, ejecuta la operacion antes de preguntar si la condición se cumple. Si pasa esto cuando se verifica que la condición es correcta entonces
se repetirá la operación varias veces. <br><br>";
$cookies = 0;
do{
print $cookies ." ";
$cookies++;
} while
($cookies < 10);
?>