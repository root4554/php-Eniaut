<?php

include_once 'Conexion.php';
include_once 'Modelos.php';
include_once 'AnimalModelo.php';

class AnimalModelo extends Conexion implements Modelos
{

    function __construct()
    {
        parent::__construct();
    }

    public function update($itemAssoc)
    {}

    public function selectById($id)
    {
        //TODO examen
        //select * from animals where id=$id
        //devuelve un animal en formato array asociativo
        $query = parent::con()->query("SELECT * FROM animals where id = $id");
        $returned = [];

        while ($row = $query->fetch_assoc()) {
            $returned[] = $row;
        }

        return $returned;
    }
    
    public function selectAnimalsByZoo($idZoo){
        //TODO examen
        //SELECT * FROM animals where zoo_id=$idZoo
        //devuelve un array de animales en formato array asociativo
        
        $query = parent::con()->query("SELECT * FROM animals where zoo_id = $idZoo");
        $returned = [];

        while ($row = $query->fetch_assoc()) {
            $returned[] = $row;
        }

        return $returned;
        
    }

    public function selectAll()
    {
        //TODO examen
        //devuelve un array de animales en formato array asociativo

        $query = parent::con()->query("SELECT * FROM animals");
            $returned = [];
    
            while ($row = $query->fetch_assoc()) {
                $returned[] = $row;
            }
    
            return $returned;
    }
    public function delete($id)
    {}
    public function insert($itemAssoc)
    {}
}