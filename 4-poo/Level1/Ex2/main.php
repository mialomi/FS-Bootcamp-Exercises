<?php

include "./shape.php";
include "./rectangle.php";
include "./triangle.php";

$rectangle1 = new Rectangle(5, 9);
$triangle1 = new Triangle(8, 9);

echo $triangle1 ->calcular_area();
echo "<br>";
echo $rectangle1 ->calcular_area(). "<br>";
?>