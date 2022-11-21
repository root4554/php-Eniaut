<?php
    $num1=1;
    $num2=4;
    $num3=7;
    
   if ($num1<$num2) {
       echo "<br>if 1";
       if ($num2<$num3) {
           echo "<br>if 2";
           echo "<br>el orden ascendente es :".$num1." ".$num2." ".$num3;
           echo "<br>el orden descendente es :".$num3." ".$num2." ".$num1;
       }
       else{
           echo "<br>else 1";
           echo "<br>el orden ascendente es :".$num1." ".$num3." ".$num2;
            echo "<br>el orden descendente es :".$num2." ".$num3." ".$num1;
       }
   } 
   elseif($num1>$num2){
       echo "<br>elseif";
       echo "<br>el orden ascendente es :".$num2." ".$num3." ".$num1;
       echo "<br>el orden descendente es :".$num1." ".$num3." ".$num2;
   }