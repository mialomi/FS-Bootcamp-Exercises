<?php



$llistat = array("dilluns", "dimarts", "dimecres", "dijous", "divendres");
$s = "s"; //"e";

function trobar_valor($llistat, $s){

foreach($llistat as $caracter){
    if(strpos($caracter, $s) === false){
        return false;
    } 
    
}
return true;

}

echo trobar_valor($llistat, $s);






?>