<?php
print"<h4>While</h4>";

print "<h3>A.</h3>";
$cantidad = 50;
while($cantidad > 40)
{
print $cantidad ." ";
$cantidad -- ;
}

print "<h3>B.</h3>";
$contador =  1 ;
while($contador < 6)
{
$incremento = $contador++  * 2;
print $incremento ." ";
}



?>