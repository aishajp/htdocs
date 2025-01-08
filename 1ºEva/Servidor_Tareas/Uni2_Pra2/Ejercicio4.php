<?php

$matriz = [];

for($i = 0; $i < 4; $i++) {
    for($j = 0; $j < 4; $j++) {
        $matriz[$i][$j] = rand(1, 100);
    }
}

echo "Matriz aleatoria:<br>";

for($i = 0; $i < 4; $i++) {
    for($j = 0; $j < 4; $j++) {
        echo $matriz[$i][$j]. " ";
    }
    echo "<br>";
}

echo "<br>Elementos en la diagonal principal:<br>";

for($i = 0; $i < 4; $i++) {
    echo $matriz[$i][$i]. " ";
}

echo "<br>Elementos en la diagonal secundaria:<br>";

for($i = 0; $i < 4; $i++) {
    echo $matriz[$i][3-$i]. " ";
}

echo "<br>";


?>