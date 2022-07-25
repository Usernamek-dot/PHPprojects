<?php

 include "conexion.php";


 //se llaman los datos actualizados

 $id = $_POST['id'];
 $nombre = $_POST['nombre'];
 $edad = $_POST['edad'];
 $color = $_POST['color'];

 $actualiza = $conexion -> query ("UPDATE usuario SET nombre = '$nombre' ,  edad= '$edad',  color = '$color' WHERE id = '$id' ");

 if($actualiza){ header("location: formulario.php") ;} // si se actualizaron los datos me redirecciona al formulario 


?>