<?php
$number = $_POST["number"];

print "<h4>La tabla de multiplicar de el número que elegiste es:</h4>";

if( isset ( $_POST["button"] ) )
{
	for($i=0; $i<11; $i++)
	{
	$result = $number * $i;	
	print $number ."x". $i ."=". $result ."<br>";
	}
}
?>