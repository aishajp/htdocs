<?php

$matriz = [];

for ($i = 0; $i < 4; $i++) {
    $matriz[$i] = [];
    for ($j = 0; $j < 4; $j++) {
        $matriz[$i][$j] = rand(1, 50);
    }
}

$maxSum = 0;

for ($j = 0; $j < 4; $j++) {
    $sum = array_sum(array_column($matriz, $j));
    if ($sum > $maxSum) {
        $maxSum = $sum;
        $maxColumn = $j;
    }
}

echo "Columna con la maxima suma: ". ($maxColumn + 1). "<br>";

echo "Suma de la columna ". ($maxColumn + 1). ": ". $maxSum. "<br>";

// Imprimir la matriz

echo "<table>";
foreach ($matriz as $fila) {
    echo "<tr>";
    foreach ($fila as $valor) {
        echo "<td>". $valor. "</td>";
    }
    echo "</tr>";
}

echo "</table>";

?>