<?php


abstract class Shape{
    protected $ample = 0;
    protected $alt = 0;

    public function __construct($ample, $alt){
        $this -> ample = $ample;
        $this -> alt = $alt;
    }

    public function getAmple(){
        return $this -> ample;
    }
    public function getAlt(){
        return $this -> alt;
    }

   public abstract function calcular_area();
}

?>