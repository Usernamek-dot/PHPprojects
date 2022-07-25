<?php
     include "conex.php";

     $id = $_REQUEST["id"]; // traigo el id

     $consulta = $conexion -> query("SELECT * FROM preguntas WHERE id =" . $id); //se consulta a la bd por todos los datos

     if($datos = $consulta -> fetch_assoc()){} //se traen los datos relacionados con el id
   
?>

<html>

<!--se trae el mismo formulario--->

<fieldset>
<legend>Llena el pequeño formulario</legend>
    <form method="post" action="update.php">

            <input type="hidden" name="id" value =" <?php print $datos['id']; ?>">

            <input type="text" name="nombre" placeholder=" Nombre" value=" <?php print $datos['nombre'];?> "><br><br>
            <input type="text" name="estacion" placeholder=" Estación del año favorita" value="<?php print $datos['estacion'];?>"><br><br>
            <input type="text" name="comida" placeholder="Comida favorita" value="<?php print $datos['comida'];?>"><br><br>
            <button>go
            
    </form>
</fieldset> 

</html>