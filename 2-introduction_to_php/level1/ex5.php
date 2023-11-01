<?php


function verificar_alumne($nota){

    switch($nota){

        case ($nota >= 6):
            return "L'alumne és de Primera Divisió.";
            break;
        case ($nota > 4.5 && $nota < 6):
            return "L'alumne és de Segona Divisó.";
            break;
        case ($nota > 3.3 && $nota < 4.5):
            return "L'alumne és de Tercera Divisó.";
            break;
        case ($nota < 3.3):
            return "L'estudiant reprovarà.";
            break;
    }
}

echo verificar_alumne(4);


?>