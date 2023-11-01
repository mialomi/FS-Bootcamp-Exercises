<?php

include_once "./ex1Niv2.php";

$Info = new Info();
$file = $Info -> getFile();
$dir = $Info -> getDir();


echo "The archive is " .$file;
echo "<br>";
echo "The directory is " .$dir;







?>