<?php

$matriz = array(
    array(3, 2, 6, 8),
    array(4, 9, 5, 7),
    array(1, 0, 2, 3)
);

$maximos_filas = array();

$promedios_filas = array();

foreach ($matriz as $fila) {
    $maximos_filas[] = max($fila);
    $promedios_filas[] = array_sum($fila) / count($fila);
}

echo "Valores máximos de cada fila: <br>";

foreach ($maximos_filas as $maximo) {
    echo "$maximo\n";
}

echo "<br>Promedios de cada fila: <br>";

foreach ($promedios_filas as $promedio) {
    echo "$promedio\n";
}

?>