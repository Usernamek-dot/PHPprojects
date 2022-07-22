<?
$number = $_POST["number"];
$coin = array(1,2);

while($number){

    if($number = $coin[0]){
        echo "game over !";
    }else{
        echo"<input type='number' placeholder='write a  natural number' name='number'>";
        $number = $number ++;
    }
}

?>

<html>
<form method="post">
    <input type="number" placeholder="write a  natural number" name="number">
    <input type="submit" value="enviar">
</form>

</html>