<?php

include_once "./animal.php";


class Gos implements Animals{

    public function makeSound(){
        return "Woof woof";
    }
}



?>