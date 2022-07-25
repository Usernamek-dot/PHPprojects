<?php
    include "conexion.php ";

    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $color = $_POST['color'];


    //proceso de insertar bd 

    $inserta = " INSERT INTO usuario (nombre,edad,color) VALUES ('$nombre' , '$edad' , '$color') ";

    // si funciona regresa al formulario

    if( $conexion -> query ($inserta) === TRUE ){ header("location:formulario.php");} else{ print "no sirve ";}


?>



