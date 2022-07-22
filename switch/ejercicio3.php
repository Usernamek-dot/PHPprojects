<html>
<head>
	<meta charset="utf-8"/>
	<title>Formulario</title>
</head>
<body>
	<fieldset>
		<legend>Operaciones Aritmeticas</legend><br><br>
	<form  method="post">

<!----required: establecer que un campo es obligatorio.---->
<!----min/max : establecer un minimo o un maximo acerca del numero que se ingrese.--->
<!----step: atributo para tomar un numero como paso incial, para que no se permita numeros decimales.---->

		<input type ="number" id="numero1" name="numero1" placeholder="Numero 1" required min="0" step="1"><br><br>
		<input type="number" id="numero2" name="numero2" placeholder="Numero2" required min="0" step="1"><br><br>
		<input type="number" id="numero3" name="numero3" placeholder="Numero3" required min="0" step="1" ><br><br>
		<select name="operaciones">
			<option value="sumar">Sumar</option>
			<option value="restar">Restar</option>
			<option value="multiplicar">Multiplicar</option>
			<option value="promedio">Promedio</option>
		</select>
		<input type="submit" name="enviar" value="Calcular">
	</form>
	</fieldset>
<h3>Resultado:</h3>
</body>
</html>
<?php
//para no mostrar errores:
error_reporting(0);

	$num1 = $_POST["numero1"];
	$num2 = $_POST["numero2"];
	$num3 = $_POST["numero3"];
	$operaciones = $_POST["operaciones"];

if(isset( $_POST ["enviar"] )){
	
switch($operaciones){
	case "sumar" :
	$resultSuma = $num1 + $num2 + $num3;
	print $resultSuma;
	break;

	case "restar" :
	$resultResta = $num1 - $num3 - $num3;
	print $resultResta;
	break;

	case "multiplicar" :
	$resultMult = $num1 * $num3 * $num3;
	print $resultMult;
	break;

	case "promedio" :
	$resultResta = ($num1 + $num3 + $num3)/3 ;
	print $resultResta;
	break;

	default:
	print "<br>No se ha realizado ninguna operación.";
	break; 
	}
}



?>