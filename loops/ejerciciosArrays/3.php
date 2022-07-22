<?php
print "<h5>PELICULAS</h5>";

$mes = array( "Enero"=>9 , "Febrero"=>12 , "Marzo"=>0 , "Abril"=> 17 );

foreach($mes as $key=>$value)
{
	if($value == 0){}
	else{ print "En el mes :  " . $key . "  se vieron  " . $value . "  peliculas. <br><br>" ; }
	
}

?>