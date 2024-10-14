<?php
$num1= 52;
$num2= 66;
$num3= 48;

echo "El numero 1 es: $num1 <br>";

echo "El numero 2 es: $num2 <br>";

echo "El numero 3 es: $num3 <br>";

if( ($num1>=$num2) && ($num1>=$num3) ){
    echo "El numero mayor es $num1 <br>";

    } elseif( ($num2>=$num1) && ($num2>=$num3) ){
        echo "El numero mayor es $num2 <br>";

    }else
        echo "El numero mayor es $num3 <br>";
        
    ?>