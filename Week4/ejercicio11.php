<form action="ejercicio11.php" method="POST">
    <label for="" > Enter the string </label>
    <input type="text" name="string">
    <input type="submit" name="btn" value="ENVIAR">
</form>



<?php
// Vector que registra n cantidad de letras y las imprime de forma inversa
require('required.php');

$string = $_POST["string"];
$btn = $_POST["btn"];

if(isset($btn)){
    $array = str_split($string);
    printInverseArray($array);
}

?>