<?php include "conex.php"; //incluir conexion ?>

<html>
<body>

<fieldset>
<legend>Llena el pequeño formulario</legend>
    <form method="post" action="insertar.php">
            <input type="text" name="nombre" placeholder=" Nombre"><br><br>
            <input type="text" name="estacion" placeholder=" Estación del año favorita"><br><br>
            <input type="text" name="comida" placeholder="Comida favorita"><br><br>
            <button>go
            
    </form>
</fieldset> 

<br><hr></br>

<?php
    $mostrar = $conexion->query("SELECT * FROM preguntas"); //que muestre lo que esta en la bd

    while($datos = $mostrar->fetch_assoc())  //se crea un ciclo para que se muestren los datos
    { 
?>

        <h3>    <?php print $datos["nombre"]; ?>    </h3>
         <h3>     <?php print $datos["estacion"]; ?> </h3>  
        <h3>     <?php print $datos["comida"];  ?>  </h3>   

        <!--hipervinculos--->
        <a href="   actualizar.php?id=<?php print $datos['id']; ?> ">Actualizar Información </a><br>
        <a href="   borrar.php?id=<?php print $datos['id']; ?> ">Borrar Información</a>        

<?php } //se cierra ciclo while ?>
</body>
</html>
