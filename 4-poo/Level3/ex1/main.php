<?php

include_once "./cinema.php";
include_once "./pelicules.php";



$cinema1 = new cinema("Arenas", "Barcelona");
$pelicula1 = new pelicules("Titanic", 190, "James Cameron");



$cinema1 ->afegir_pelicula($pelicula1);

$cinema1 ->mostrar_dades();

$cinema1 ->mostrar_pelicula_mesllarga();

//$cinema1 ->buscar_director(tarantino)




















?>