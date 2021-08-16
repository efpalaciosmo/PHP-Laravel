<form action="ejercicio3.php" method="POST">
    <label for="" > Tamano del array </label>
    <input type="text" name="size"> <br>
    <label for="" > Multiplos de </label>
    <input type="text" name="n"> <br>
    <input type="submit" name="btn" value="ENVIAR">
</form>


<?php
// Multiplos de un digito en un array

require("required.php");

$array = array();

// n es un numero del que seran multiplos los valores en el array
function multiples($n, $size){
    $array = array();
    for($i=1; $i<=$size; $i++){
        array_push($array, $n*$i);
    }
    return $array;
}

$size = $_POST["size"];
$n = $_POST["n"];
$btn = $_POST["btn"];

if(isset($btn)){
    $array = multiples($n, $size);
    printArray($array);
}

?>