<?php

$X = 32;
$Y = 65;
$N = 72.8;
$M = 12.25;

echo $X ."<br>". $Y ."<br>";


echo $X + $Y . "<br>";
echo $X - $Y. "<br>";
echo $X * $Y. "<br>";
echo $X % $Y. "<br>";


echo $N + $M. "<br>";
echo $N - $M. "<br>";
echo $N * $M. "<br>";
echo $N % $M. "<br>";


echo $X * 2 . "<br>";
echo $Y * 2 . "<br>";
echo $N * 2 . "<br>";
echo $M * 2 . "<br>";


echo $X + $Y + $N + $M. "<br>";


echo $X * $Y * $N * $M. "<br>";


function calculadora($valor1, $valor2, $operacio){

switch ($operacio){
    case 'sumar':
        $resultat = $valor1 + $valor1;
        break;
    case 'restar':
        $resultat = $valor1 - $valor1;
        break;
    case 'multiplicar':
        $resultat = $valor1 * $valor2;
        break;
    case 'divisio':
        $resultat = $valor1 / $valor2;
        break;
    }

    return $resultat;
}

echo calculadora(32, 12, 'sumar');



?>