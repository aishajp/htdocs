<?php
include ("Ejercicio_01.php");

$a = 1;
$b = -3;
$c = 2;

// Llama a la función
$result = ecuacionCuadrada($a, $b, $c);

// Muestra los resultados
if ($result === false) {
return false;
} else {
    echo "Las soluciones de la ecuación son: " .var_dump($rsolution1, $solution2);
}
?>