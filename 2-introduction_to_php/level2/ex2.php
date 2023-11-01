<?php

function chocolate($units) {
        $subChocolate = $units * 1;
        return $subChocolate;
    }

function gum($units) {
        $subGum = $units * 0.50;
        return $subGum;
    }

function caramel($units){
        $subCaramel = $units * 1.50;
        return $subCaramel;
    }

function Candy_Shop($unit_chocolate, $unit_gum, $unit_caramel) {

    $subChocolate = chocolate($unit_chocolate);
    $subGum = gum($unit_gum);
    $subCaramel = caramel($unit_caramel);


    $total = $subChocolate + $subGum + $subCaramel;
    return $total;

}

echo "<h2> CANDY SHOP </h2> <br> 
Total amount: " . Candy_Shop(3, 5, 2). " € <br> Thank you!";



?>