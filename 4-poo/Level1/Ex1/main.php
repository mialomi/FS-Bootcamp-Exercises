<?php

include_once "./employee.php";

$employee1 = new Employee();
echo $employee1 -> initialize("Mia", 5000);

echo $employee1 ->print();
?>