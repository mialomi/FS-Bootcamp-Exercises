<?php
include_once "./shape.php";
class Rectangle extends Shape{

    public function calcular_area(){
        $resultat = $this -> ample * $this -> alt;

        return $resultat;
    }
}





?>