<?php

/*Crea una classe Employee, defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi com a paràmetres el nom i sou. Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos (si el sou supera 6000, paga impostos).*/


class Employee{
    protected $nom = "";
    protected $sou = 0;

    public function initialize ($nom, $sou){
        $this -> nom = $nom;
        $this -> sou = $sou;

    }

    public function print(){
        if($this -> sou > 6000){
            echo $this ->nom. ", has de pagar impostos.";}
        else{
            echo $this -> nom. ", no has de pagar impostos.";
        } 
    }




}


?>