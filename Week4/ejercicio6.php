<form action="ejercicio6.php" method="POST">
    <label for="" > Tamano del array para pares </label>
    <input type="text" name="sizep"> <br>
    <label for=""> Tamano del array para impares</label>
    <input type="text" name="sizei"> <br>
    <input type="submit" name="btn" value="ENVIAR">
</form>

<?php
// Guardar numeros pares, numeros impares y imprimirlos por pantalla
require('required.php');

$sizep = $_POST["sizep"];
$sizei = $_POST["sizei"];
$btn = $_POST["btn"];

if(isset($btn)){
    $pares = randomArrayP($sizep);
    $impares = randomArrayI($sizei);
    printArray($pares);
    echo "<br>";
    printArray($impares);

}

?>