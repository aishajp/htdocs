<?php
/*Crea una función para resolver la ecuación de segundo grado. Esta función recibe 
los coeficientes de la ecuación y devuelve un array con las soluciones. Si no hay 
soluciones reales, devuelve FALSE.*/

function solveQuadraticEquation($a, $b, $c) {
    // Calcula el discriminante
    $discriminant = ($b ** 2) - (4 * $a * $c);

    // Verifica si hay soluciones reales
    if ($discriminant >= 0) {
        // Calcula las dos soluciones
        $solution1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $solution2 = (-$b - sqrt($discriminant)) / (2 * $a);

        // Devuelve un array con las soluciones
        return array($solution1, $solution2);
    } else {
        // No hay soluciones reales
        return false;
    }
}

?>