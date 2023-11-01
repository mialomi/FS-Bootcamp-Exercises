<?php

include_once "./shape.php";

class Triangle extends Shape{

    public function calcular_area(){
        $resultat = ($this -> ample * $this -> alt) / 2;

        return $resultat;

    }

}

?>