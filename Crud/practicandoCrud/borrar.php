<?php

include "conexion.php";

$id = $_REQUEST['id']; // se llama la id

$borrar = $conexion -> query ("DELETE FROM  usuario WHERE id=" .$id );

if($borrar){ header("location:formulario.php") ;}

?>