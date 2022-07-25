<?php 
include ("conexion.php"); //se abre conexion a la bd

$id = $_REQUEST['id']; //se recupera el Id para que la informacion se guarde en la bd con  el metodo REQUEST

$seleccionar = $conexion -> query ( " SELECT * FROM  persona WHERE id= " . $id ); //se hace la consulta a la tabla PERSONA con el ID

if($fila = $seleccionar -> fetch_assoc()){} //en el arreglo asociativo FILA  se guarda la informacion de la fila que se llame por el ID

?>

<html>
<body>


	<fieldset> <legend>Actualizar</legend>
<form action="update.php" method="post">
							<!--se debe traer el Id--->
	<input type="hidden" name="id" value="<?php echo $id ?>"> <!--el tipo HIDDEN es para que se oculte el campo en el formulario--->
	<label>Nombre</label><br>
	<input type="text" name="nombre"  value="<?php echo $fila['nombre'] ?>"><br><br>
	<label>Apellido</label><br>
	<input type="text" name="apellido"  value="<?php echo $fila['apellido'] ?>"><br><br>
	<label>Correo</label><br>
	<input type="email" name="correo"  value="<?php echo $fila['correo'] ?>"><br><br>
	<input type="submit" value="Actualizar">
</form>

</fieldset>

<!-- se cierra la conexion-->

<?php	$conexion -> close();	?>
</body>
</html>