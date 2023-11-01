<?php

class pelicules{

private $nom;
private $duracio;
private $director;


public function __construct($nom, $duracio, $director){

    $this -> nom = $nom;
    $this -> director = $director;
    $this -> duracio = $duracio;


}

public function getDuracio(){
    return $this->duracio;
}



public function __toString() {

    return $this -> nom . $this -> director . $this -> duracio;
}



}








?>