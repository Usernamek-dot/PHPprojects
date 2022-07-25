<?php
        include "conexion.php";

        $id = $_REQUEST['id']; // se llama el id

        $consulta = $conexion -> query("SELECT * FROM usuario WHERE id = " . $id );

        //se traen los datos para verificar el id
        if($datos = $consulta -> fetch_assoc()){}
    
?>

<html>

<form method="post" action="update.php">

<input type="hidden" name="id" value="  <?php print $id ?> ">

                                             <!--- el value es para que los campos esten llenos ----->
    <label>Nombre:</label>  <input type="text" name="nombre"  value="<?php print $datos['nombre']?>">
    <label>Edad:</label>  <input type="text" name="edad" value="<?php print $datos['edad']?>">
    <label>Color:</label>  <input type="text" name="color" value="<?php print $datos['color']?>">
    <input type="submit"  value="Go">

</form>

</html>