<html>
<body>
<fieldset >Formulario
<form method="post">
<label>Nombre</label>
<input type="text" name="nombre">
<input type="submit" value="enviar">
</fieldset>
</form>
<?php
$nombre = $_POST[ "nombre" ];
print $nombre;
?>
</body>
</html>