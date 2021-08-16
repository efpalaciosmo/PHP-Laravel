<form action="ejercicio10.php" method="POST">
    <label for="" > Tamano del array </label>
    <input type="text" name="size">
    <input type="submit" name="btn" value="ENVIAR">
</form>


<?php
// llenar un verctor de longitud 10 usando numeros aleatorios

require('required.php');

$size = $_POST["size"];
$btn = $_POST["btn"];

if(isset($btn)){
    $array = randomArray($size);
    printArray($array);
}

?>