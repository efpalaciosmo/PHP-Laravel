<?php

function randomArray($size){
    $array = array();
    for($i=0; $i<$size; $i++){
        array_push($array,rand(0, 100));
    }
    return $array;
}

function printArray($array){
    for ($i=0; $i<count($array); $i++){
        echo $array[$i] . PHP_EOL;
    }
}

function randomArrayP($size){
    $array = array();
    do{
        $number = rand(0, 100);
        if($number%2==0){
            array_push($array,$number);
        }
    }while(count($array)<$size);

    return $array;
}
function randomArrayI($size){
    $array = array();
    do{
        $number = rand(0, 100);
        if($number%2==1){
            array_push($array,$number);
        }
    }while(count($array)<$size);

    return $array;
}

function printInverseArray($array){
    for ($i=count($array)-1; $i>=0; $i--){
        echo $array[$i];
    }
    echo PHP_EOL;
}


?>