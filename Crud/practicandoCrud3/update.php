<?php
    include "conex.php";

    //se llaman los datos actualizados

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $estacion = $_POST["estacion"];
    $comida = $_POST["comida"];

    //se actualizan datos
    $actualiza =  $conexion -> query("UPDATE preguntas SET nombre = '$nombre' , estacion = '$estacion' , comida = '$comida' WHERE id='$id' ");

    //se verifican datos
    if($actualiza){header("location:formulario.php");}

?>