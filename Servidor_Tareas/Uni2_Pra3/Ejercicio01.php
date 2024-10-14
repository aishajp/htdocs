<?php
/*Crea una función para resolver la ecuación de segundo grado. Esta función recibe 
los coeficientes de la ecuación y devuelve un array con las soluciones. Si no hay 
soluciones reales, devuelve FALSE. */

function solveQuadraticEquation($a, $b, $c) {
    $a= 4;
    $b=-5;
    $c=2;
    // Calcula el discriminante
    $discriminant = pow($b, 2) - 4 * $a * $c;
    
    // Si el discriminante es mayor que cero, hay dos soluciones reales
    if ($discriminant > 0) {
        $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminant)) / (2 * $a);
        return array($x1, $x2);
    }
    
    // Si el discriminante es igual a cero, hay una solución real
    elseif ($discriminant === 0) {
        $x = -$b / (2 * $a);
        return array($x);
        echo "Solucion".array($x);
    }
    
    // Si el discriminante es menor que cero, no hay soluciones reales
    else {
        return false;
        echo "False".$discriminants;
    }
}

?>