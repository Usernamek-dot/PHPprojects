<?php
function volumen( $radioBase , $altura )
{
$pi = 3.1416 ;
$v = $pi * $radioBase * $radioBase * $altura ;
return $v;
}
//A continuación se llama la función.
$result = volumen(4,10) ;
print "El volumen de un cilindro de radio de 4cm y altura de 10cm es : " . $result ;
?>