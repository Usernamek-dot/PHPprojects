<?php
$numberkey = $_POST["numberkey"];
if($numberkey = 1){
    $vowel= array("p","q","r","s"); 
    $sql = "select contact from tblcontact where code like'%$vowel%'";
    $contact = $con->query($sql);
    echo $contact;
}elseif($numberkey = 1 && $numberkey = 2){
    $vowel= array("p","q","r","s","g","h","i"); 
    $sql = "select contact from tblcontact where code like'%$vowel%'";
    $contact = $con->query($sql);
    echo $contact;

}else{
    echo '<script type="text/javascript">
    alert("Presione un botón");
    window.location.href="contactos.php";
    </script>';
}
?>

<html>
<form method="post" >
    <button name="numberkey" value="1">1</button>
    <button name="numberkey" value="2">2</button>

    <input type="submit" value="enviar">
</form>
</html>