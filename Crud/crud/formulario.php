<?php include 'conexion.php' ; ?>

<html>
<head>
<title > Crud </title>
</head>
<body>

<div class="contenedor">

<fieldset> <legend>Ingrese datos</legend><br>
<form action="guardar.php" method="post">
	<label>Nombre</label><br>
	<input type="text" name="nombre" required><br><br>

    	<label>Apellido</label><br>
	<input type="text" name="apellido" required><br><br>

	<label>Correo</label><br>
	<input type="email" name="correo" required><br><br>

	<input type="submit" value="Go"><br><br>
</form>
</fieldset>

</div>

<br><hr><br>
<table border= "1">

<!--esta parte del encabezado de la tabla no entra en el bucle porque se repetiria cada vez que un usuario ingrese-->

 	<th>Nombre</th>
	<th>Apellido</th>
	<th>Correo</th>
	<th>Editar</th>
	<th>Eliminar</th>

<?php						
	
										
	$selecciona = $conexion->query(" SELECT * FROM persona "); // se realiza la consulta de los datos a la tabla Persona
						 				
		while($fila = $selecciona -> fetch_assoc()) //funcion: que recorre todos los campos del array asociativo $fila	
//se abre el ciclo while. 
{
?>
		<!--se imprime la informacion de los campos que recorrio el array en la siguiente tabla--->
	<tr>
		<td><?php echo $fila['nombre']?></td>
		<td><?php echo $fila['apellido']?></td>
		<td><?php echo $fila['correo'] ?></td>

<!----	
		se llama el identificador Id para que se envie a los datos de ese identificador.
		El Id se ingresa  de esta manera porque es autoincremental en la base de datos
--->
		<td><a href="actualizar.php?id=<?php echo $fila['id'] ?>" > Actualizar </a></td> <!--hipervinculo que envia a ACTUALIZAR.PHP--->
		<td><a href="borrar.php?id=<?php echo $fila['id'] ?>" > Eliminar </a></td> <!--hipervinculo que envia  BORRAR.PHP--->
	</tr>


<?php 

//aqui se cierra el ciclo while. 
} 
//se cierra la conexion
 $conexion->close();
?>
</table>
</body>
</html>