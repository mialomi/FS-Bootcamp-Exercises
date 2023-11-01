<?php

include_once "./gat.php";
include_once "./gos.php";


$Otis = new Gat();
echo $Otis -> makeSound();
echo "<br>";
$Gus = new Gos();
echo $Gus ->makeSound();


?>