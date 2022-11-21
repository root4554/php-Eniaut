<?php
    $numero = 5.9;
    
    switch ($numero) {
        case $numero<5:
        echo"suspenso";
        break;
        
        case $numero<6:
        echo "suficiente";
        break;
        
        case $numero<7:
        echo "bien";
        break;
            
        case $numero<9:
        echo "muy bien";
        break;
        
        case $numero<=10:
        echo "sobresaliente";
        break;
        
        default:
           echo "ERROR" ;
    }
?>
    