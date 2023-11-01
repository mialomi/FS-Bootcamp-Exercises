<?php




$X = array (10, 20, 30, 40, 50, 60);

echo count($X). "<br>";
unset($X[3]);
//var_dump($X). "<br>";
$X = array_values($X);
//var_dump($X). "<br>";
echo count($X). "<br>";


?>