<?php
    $duracion = 2;
    
    function contar($duracion) {
        if ($duracion <= 3) {
            return 0.10;            
        }
        else {
       $resta = $duracion - 3 ;
       $coste = $resta * 0.50;
       $resulta = 0.10 + $coste;
        }
        return $resulta;
    }
    
    echo "<br>total a pagar es ".contar($duracion)." centimos";
    ?>