<?php
$rimas = array(       "Pedro Picapiedra" ,
		"Ismael hijo de Abraham" , 
		"Sonia de Amazonía" ,
		"Clara como el agua" , 
		"Susana novia de Suso" ,
		"Alfonso el apetitoso",
		"Teresa la que besa"
	   );

print " El número de valores que hay en el array es : " . count($rimas) ."<br>" ;	
print "<h3>Lista De Valores:</h3>";

sort($rimas);
foreach($rimas as $key => $value)
{
	print "Rimas [ " . $key . " ] = " . $value . "<br><br>" ;
}
?>