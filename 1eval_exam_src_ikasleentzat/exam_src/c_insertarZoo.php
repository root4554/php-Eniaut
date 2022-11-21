<?php
//TODO examen
/*
 * controlador que inserta los datos
 * del zoo recibidos por post.
 * y abre:
 *  opcion 1: la pantalla del zoo que acabamos de insertar VER_ZOO
 *  opcion 2: el panel principal donde aparecen todos los zoos 
 */

require_once 'modelo/Modelos.php';
require_once 'modelo/ZooModelo.php';


$max_id = (new ZooModelo())->maxIdZoo();
var_dump($max_id);

$zoo_id = $_POST['id'];
$city = $_POST['ciudad'];
$name = $_POST['nombre'];
$address = $_POST['direccion'];
$country = $_POST['pais'];
$description = $_POST['descripcion'];
$pic = $_POST['foto'];

$con = new Modelos();

$zoo = new ZooModelo($zoo_id, $name, $city, $address, $country, $description, $pic);

$con->insert($zoo);

// header('Location: ShowZoosController.php');
exit();