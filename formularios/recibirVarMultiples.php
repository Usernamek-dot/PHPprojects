<html>
<title>Variables Multiples</title>
<body>
<h1>Elige!</h1>

<form method="post">

<label name="">Hobbies:</label><br>

<label><input type="checkbox" name="hobbies[]" value="nadar" id="nadar">Nadar</label><br>

<label><input type="checkbox" name="hobbies[]" value="comer" id="comer">Comer</label><br>

<label><input type="checkbox" name="hobbies[]" value="leeer" id="leer">Leer</label><br>

<label><input type="checkbox" name="hobbies[]" value="caminar" id="caminar">Caminar</label><br><br>


<label for="helados">Que helado prefieres?</label><br><br>

<select multiple="multiple" name="helados[]" id="helados">

<option value="Brownie">Brownie</option>
<option value="Limon">Limon</option>
<option value="Chicle">Chicle</option>
<option value="Maracuya">Maracuya</option>

</select>


<br><br><input type="submit" value="Go!">

</form>

</body>
</html>

<?php
error_reporting(0);

$hobbies = $_POST["hobbies"];
$helados = $_POST["helados"];

print "<br>Cantidad de hobbies :   " .count($hobbies) ;

foreach( $hobbies as  $key => $value )
{
print "<li>" . $value . "</li>" ;
}

print "<br>Cantidad de helados :   " .count($helados) ;

foreach( $helados as  $key => $value )
{
print "<li>" . $value . "</li>" ;
}

?>