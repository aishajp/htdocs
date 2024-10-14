<?php
/*Implementa un array asociativo con los siguientes valores y ordénalo de menor a 
mayor. Muestra los valores en una tabla.
$numeros=array(3,2,8,123,5,1) */

$numeros = array(3, 2, 8, 123, 5, 1);
echo "Array original:<br>";

foreach ($numeros as $key => $value) {
    echo $value. " ";
}

echo "<br><br>Array ordenado de menor a mayor:<br>";

// Ordenar el array de menor a mayor

arsort($numeros);

// Mostrar los valores en una tabla

echo "<table border = 1>";
echo "<tr><th>Valor</th><th>Posición</th></tr>";

foreach ($numeros as $key => $value) {
    echo "<tr><td>$value</td><td>$key</td></tr>";
}

echo "</table>";

?>