<?php

//TODO examen
/*
 * controlador que recibe una id de zoo
 * y muestra la información del zoo 
 * con sus animales.
*/

require_once 'modelo/ZooModelo.php';
require_once 'modelo/AnimalModelo.php';
require_once 'modelo/Modelos.php';


$zoo_id = $_GET['id'];

$zoo_con = new ZooModelo();

$animal_con = new AnimalModelo();


$zoo = $zoo_con->selectById($zoo_id);

$animals = $animal_con->selectAnimalsByZoo($zoo_id);

// var_dump($zoo);
// var_dump($zoo['ciudad']);
// var_dump($animals);

$zoo_con->close();
$animal_con->close();

require_once 'vista/zoo.php';