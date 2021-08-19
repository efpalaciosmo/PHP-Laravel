<?php
include ("static_methods.php");

$buyAntonio = new Buy("compact");
$buyAntonio->climateControl();
echo $buyAntonio->final_price() . '<br>';
echo "The number of shopping is: " . Buy::$shopping . '<br>';


$buyJuan = new Buy("urban");
$buyJuan->climateControl();
echo $buyJuan->final_price() . '<br>';
echo "The number of shopping is: " . Buy::$shopping . '<br>';

?>