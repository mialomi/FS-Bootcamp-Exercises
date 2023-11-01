<?php

    function facturaTelefonica($durada, $costInicial=10){
        if( $durada <= 3){
            return $costInicial;
        }
        else{
            $exces = $durada - 3;
            $costTotal = $costInicial + ($exces * 5);
            return $costTotal;
        }


}

?>