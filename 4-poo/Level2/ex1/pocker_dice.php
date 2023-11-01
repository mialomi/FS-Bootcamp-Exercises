<?php

class Pocker_Dice{

    private $figuras= ["As", "K", "Q", "J", "7", "8"];
  

//generar valor aleatori
public function throw_Dice(){

    $tirada = array_rand($this ->figuras);
  //  echo $tirada;
   
}
function tirar_dau(){
    
}

//retorna quina figura és
function shapeName(){
    return $this -> figuras;

}
//retorna el número de tirades
function get_total_throws() {
    $llistat_tiradas = array();
    

}


}






















?>