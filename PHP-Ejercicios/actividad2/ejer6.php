<?php
    $num1 = 1;
    $num2 = 2;
    
    $suma = $num1 + $num2;
    $prod = $num1 * $num2;
    
    if ($suma > $prod) {
        echo"la suma es mayor que el producto".$suma." ".$prod ;
    }
    else {
        echo "el producto es mayor que la suma".$suma." ".$prod;
    }
?>