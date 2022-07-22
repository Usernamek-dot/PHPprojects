<html>
<head>
<title>Recibir variables</title>
</head>
<body>
<h1>Formulario</h1>
<form method="post">
<label for="nombre">Nombre</label>
<input type="text" name="nombre" id="nombre"><br><br>

<label for="pass">Clave</label>
<input type="password" name="pass" id="pass"><br><br>

<label for="coment">Comentarios</label>
<textarea  id="coment" name="coment"></textarea><br><br>

<label for="idiom">Idioma</label>
<select id="idiom" name="idioma">
<option value="español">Español</option>
<option value="italiano">Italiano</option>
<option value="portugues">Portuguez</option>
<option value="coreano">Coreano</option>
</select><br><br>

<label for="estado">estado:</label><br>
<input type="radio" id="Infeliz" value="Infeliz"><label for="Infeliz">Infeliz</label><br>
<input type="radio" id="feliz" value="feliz"><label for="feliz">feliz</label><br>

<input type="submit" value="enviar">

	<!------envio multiple----->


</form>
<?php

error_reporting(0);

$nombre = $_POST[ "nombre" ];
$pass = $_POST[ "pass" ];
$coment = $_POST[ "coment" ];
$idiom = $_POST[ "idioma" ];
$estado = $_POST[ "estado" ];
print "RESULTADOS: <br>";
print    "-" . $nombre ."<br>-". $pass ."<br> -" . $coment  ."<br>-" . $idiom  ."<br>" .  $estado ;


?>
</body>
</html>