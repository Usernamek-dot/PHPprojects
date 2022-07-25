<?php
    include "conex.php";

    $id = $_REQUEST["id"]; //se trae el id
    
    $delete = $conexion -> query("DELETE FROM preguntas WHERE  id= " .$id); //se consulta a la bd y borra

    if($delete){ header("location:formulario.php"); } //si eliminó de la bd regresa al formulario


?>