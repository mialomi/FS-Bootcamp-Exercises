<?php


class cinema{

    private $nom;
    private $poblacio;
    private $llistat_pelicules;

public function __construct($nom, $poblacio){

    $this -> nom = $nom;
    $this -> poblacio = $poblacio;
    $this ->llistat_pelicules = array();
}

//funcio per mostrar les dades de cada peli

public function afegir_pelicula($pelicula) {

    $this -> llistat_pelicules[] = $pelicula;

}
public function mostrar_dades(){

    echo "El cinema ". $this->nom. " , té les següents pel.lícules: ";
        foreach($this -> llistat_pelicules as $pelicula){
          echo $pelicula;
    }

}


//funcio per mostrar la peli més llarga

public function mostrar_pelicula_mesllarga(){

    $duracio = 0;
    $duracio_max = null;

    //per comprobar quina és la + llarga, hem d'iterar sobre pelicules per comparar

    foreach($this -> llistat_pelicules as $pelicula){
        $duracio_nova_peli = $pelicula -> getDuracio();
        if($duracio_nova_peli > $duracio){
            $duracio_max = $duracio_nova_peli;
            $pelicula = $duracio_max;

        }

        if($duracio_max == null){
            echo "No hi ha cap pel.lícula introduïda";
        }
        else{
            echo "La pel.lícula més llarga és ". $duracio_max;

        }

    }

}
//funcio cerqui pel nom del director/a pel·lícules en diferents cinemes. No cal repetir pel·lícules.

public function buscar_director($nom_a_buscar) {

$buscar = array_search($nom_a_buscar, $this -> llistat_pelicules);

if($buscar === false) {
    echo "No s'ha trobat pel.lícules de ". $nom_a_buscar;
}
else{
    echo "S'han trobat ";
}




}










}
?>