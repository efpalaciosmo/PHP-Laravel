<?php
// Guardar en un arreglo los numero del 1 al 100

$array = array();

for ($i=1; $i<=100; $i++){
    array_push($array, $i);
}

echo count($array) . PHP_EOL;
?>