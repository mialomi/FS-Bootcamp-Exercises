<?php

//Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.

//Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.

function isBitten(){
    
    
    return rand(0, 1) > 0.5 ? "TRUE" : "FALSE";
}

echo isBitten();



?>