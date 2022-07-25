<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];
$operaciones = $_POST["operaciones"];

if( isset ( $_POST["enviar"] ) )
{	
	function calculadora($num1 , $num2 , $num3 , $operaciones)
	{	
	$result = 0;
	if($operaciones == "sumar") 	 {$result = $num1 + $num2 + $num3;}
	else if ($operaciones == "restar")    {$result = $num1 - $num2 - $num3 ;}
	else if ($operaciones == "multiplicar")    {$result = $num1 * $num2 * $num3 ;}
	else if ($operaciones == "dividir")    {$result = $num1 / $num2 / $num3 ;}	
	return $result;	
	}
	print calculadora($num1 , $num2 , $num3 , $operaciones);		
	
}

?> 
<html>
<!-----Regresar  a la pagina anterior---->
<br>
<input type="button" value="Volver" onClick="history.go(-1);">
</html>