<?php

    include "conex.php"; //se incluye la conexion

     //se reciben los datos del formulario
     $nombre = $_POST["nombre"];
     $estacion = $_POST["estacion"];
     $comida = $_POST["comida"];

     //inserto datos en la bd
     $inserta = "INSERT INTO preguntas (nombre,estacion,comida) VALUES ('$nombre', '$estacion' ,'$comida')";
     
     //si funciona regreso al formulario
     if($conexion -> query($inserta)=== TRUE){ header("location:formulario.php");} 
     else{print "Intentalo de nuevo!";}
?>