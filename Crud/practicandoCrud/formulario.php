<?php  include "conexion.php";  ?>

<html>
<body>

<form method="post" action="insertar.php">

    <label>Nombre:</label>  <input type="text" name="nombre" >
    <label>Edad:</label>  <input type="text" name="edad" >
    <label>Color:</label>  <input type="text" name="color" >
    <input type="submit"  value="Go">
</form>

</body>

<?php
        $mostrar = $conexion->query("SELECT * FROM  usuario"); //se muestra lo que esta en la bd

        while($datos = $mostrar->fetch_assoc())
        {      
?>
            <p> <?php print $datos['nombre']; ?>  </p>
            <p> <?php print $datos['edad']; ?>  </p>
            <p> <?php print $datos['color']; ?>  </p>


                <!---hipervinculos--->

            <a href="actualizar.php?id=<?php  print $datos['id'];  ?>">ACTUALIZAR</a><br>
            <a href="borrar.php?id=<?php  print $datos['id'];  ?>">BORRAR</a>
           
<?php 

//se cierrra ciclo while
 } 
 ?>

</html>