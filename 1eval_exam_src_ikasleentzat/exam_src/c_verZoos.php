<?php

//TODO examen
/*
* controlador principal llamado de index.php
* visualiza la lista de los zoos en modo galeria de fotos
* 
*/

require_once 'modelo/ZooModelo.php';
// require_once 'vista/ZooVista.php';

$con = new ZooModelo();

$zoos = $con->selectAll();

// $con->close();

require_once 'vista/dashboard.php';