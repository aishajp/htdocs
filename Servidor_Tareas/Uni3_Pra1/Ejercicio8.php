<?php

$matriz = array();

for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $matriz[$i][$j] = rand(1,50);
    }
}

//Mostrar la matriz

echo "<table>";

for ($i = 0; $i < 4; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 4; $j++) {
        echo "<td>". $matriz[$i][$j]. "</td>";
    }
    echo "</tr>";
}
echo "</table>";


$maximo = $matriz[0][0];

for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        if ($matriz[$i][$j] > $maximo) {
            $maximo = $matriz[$i][$j];
            $filaMaxima = $i;
            $columnaMaxima = $j;
        }
    }
}

echo "El número máximo es: ". $maximo. "<br>";

echo "Posición del número máximo: [".$filaMaxima.", ".$columnaMaxima."]";

?>