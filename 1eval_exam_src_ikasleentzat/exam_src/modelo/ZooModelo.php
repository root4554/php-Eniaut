<?php

include_once 'Conexion.php';
include_once 'Modelos.php';
include_once 'ZooModelo.php';


class ZooModelo extends Conexion implements Modelos
{

    function __construct()
    {
        parent::__construct();
    }

    public function maxIdZoo(){
        //TODO examen
        //devuelve el id max para poder insertar un nuevo zoo
        //SELECT max(id) as maximo FROM `zoos` WHERE 1;       
        //en caso de que no haya ningun registro return -1
        
        $query = parent::con()->query("SELECT max(id) as maximo FROM `zoos` WHERE 1");
        $returned = [];
        
        if($query->num_rows > 0){
            while ($row = $query->fetch_assoc()) {
                $returned[] = $row;
            }
            return $returned[0]['maximo'];
        }else{
            return -1;
        }
    }

    public function update($itemAssoc)
    {
    }

    public function insert($itemAssoc)

    {
        /*
        $zoo['id'] = 2;
        $zoo['nombre'] = "blal"; 
        */
        //TODO examen
        //recive un zoo en formato array asociativo
        //lo inserta en la BBDD
        //tener en cuenta que el id de zoo es pk pero no es auto incrementable
        
        $query = parent::con()->prepare("INSERT INTO zoos (id, ciudad, nombre, direccion, pais, descripcion, foto) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $query -> bind_param("issssss", $itemAssoc['id'], $itemAssoc['ciudad'], $itemAssoc['nombre'], $itemAssoc['direccion'], $itemAssoc['pais'], $itemAssoc['descripcion'], $itemAssoc['foto']);
        $query->execute();
        $query->close();
        
    }

    public function selectById($id)
    {
        //TODO examen
        //select * from zoos where id=$id
       
        //devuelve un zoo en formato array asociativo

        $query = parent::con()->query("SELECT * FROM zoos where id = $id");
        return $query->fetch_assoc();
    }

    public function delete($id)
    {
        $query = parent::con()->prepare("DELETE FROM zoos WHERE id = ?");
            $query->bind_param('i', $id);
            $query->execute();
            $query->close();
    }

    public function selectAll()
    {
       //TODO examen
       //devuelve un array de zoos en formato array asociativo

       $query = parent::con()->query("SELECT * FROM zoos");
    
        return $query->fetch_all(MYSQLI_ASSOC);
       
       
    }

}