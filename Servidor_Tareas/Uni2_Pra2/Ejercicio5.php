<?php


$matriz = [];
$filas = 3;
$columnas = 5;

//Generar la matriz

for ($i = 0; $i < $filas; $i++) {
    $matriz[$i] = [];
    for ($j = 0; $j < $columnas; $j++) {
        $matriz[$i][$j] = rand(1, 100);
    }
}

//Imprimir la matriz

echo "Impresion de la matriz:<br>";
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        echo $matriz[$i][$j]. " ";
    }
    echo "<br>";
}

//Imprimir por fila

echo "Impresion por fila:<br>";
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        echo $matriz[$i][$j]. " ";
    }
    echo "<br>";
}

//Imprimir por columna

echo "Impresion por columna:<br>";
for ($j = 0; $j < $columnas; $j++) {
    for ($i = 0; $i < $filas; $i++) {
        echo $matriz[$i][$j]. " ";
    }
    echo "<br>";
}


?>