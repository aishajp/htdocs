<?php
// test.php
include 'matematicas(02).php'; // Incluye el archivo con la función

// Ejemplo de uso(soluciones)
$a = 1;
$b = 5;
$c = 4;
$result = solveQuadraticEquation($a, $b, $c);

if ($result === false) {
    echo "No hay soluciones reales.";
} else {
    echo "Soluciones: " . implode(", ", $result);
}

//Ejemplo de uso(no hay soluciones)
$a = 4;
$b = -5;
$c = 2;
$result = solveQuadraticEquation($a, $b, $c);

if ($result === false) {
    echo "<br>No hay soluciones reales.";
} else {
    echo "Soluciones: " . implode(", ", $result);
}
?>
