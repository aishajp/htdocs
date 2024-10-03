<?php
$num1=rand();
$num2=rand();

echo "El primer numero aleatorio es: $num1<br>";

echo "El segundo numero aleatorio es: $num2<br>";

$maximo =max($num1, $num2);//Cambiar la funcion por condicionales.
$parimpar = $maximo % 2 == 0 ? "par" : "impar" ;

echo "El numero mayor es: $maximo y es un numero: $parimpar<br>";
