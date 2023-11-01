<?php

include_once "./animal.php";

class Gat implements Animals{

    public function makeSound(){
        return "Miaooow";
    }
}


?>