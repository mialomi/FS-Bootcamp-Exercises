<?php


function comptador($valor_limit = 10, $increment = 1){


    for($i = 1; $i <= $valor_limit; $i += $increment) { 
        echo $i;

    }
    echo $i;
}
echo comptador(20, 2);



?>