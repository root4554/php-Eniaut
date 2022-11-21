<?php
   $nota1 = 5;
   $nota2 = 5;
   function calcularMedia($param,$param2) {
       return ($param +$param2)/2;
   }
   if (calcularMedia($nota1,$nota2)>=5) {
    echo "Aprobada"   ;
   }
   else 
    echo "Suspendida";
   ?>