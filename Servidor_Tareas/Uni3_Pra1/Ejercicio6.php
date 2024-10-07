<?php

$matriz = array();

for ($i=0; $i<4; $i++) {
    for ($j=0; $j<5; $j++) {
        $matriz[$i][$j] = rand(1, 100);
    }
}

echo "Matriz generada aleatoriamente:<br>";

foreach ($matriz as $fila) {
    foreach ($fila as $valor) {
        echo $valor. " ";
    }
    echo "<br>";
}

$maximo = $matriz[0][0];

$filaMaxima = 0;

$columnaMaxima = 0;

for ($i=0; $i<4; $i++) {
    for ($j=0; $j<5; $j++) {
        if ($matriz[$i][$j] > $maximo) {
            $maximo = $matriz[$i][$j];
            $filaMaxima = $i;
            $columnaMaxima = $j;
        }
    }
}

echo "<br>El elemento mayor es: ".$maximo."<br>";

echo "Posición del elemento mayor: Fila ".$filaMaxima.", Columna ".$columnaMaxima;


?>