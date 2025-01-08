<?php
 
$matriz = [
    [1, 14, 8, 3], 
    [6, 19, 7, 2], 
    [3, 13, 4, 1]  
];

echo "Nivel Básico<br>";

foreach ($matriz[0] as $key => $value) {
    echo "Idioma: ". ($key == 0? "Inglés" : ($key == 1? "Francés" : ($key == 2? "Alemán" : "Ruso"))). " - Alumnos: $value<br>";
}

echo "<br>Nivel Medio<br>";

foreach ($matriz[1] as $key => $value) {
    echo "Idioma: ". ($key == 0? "Inglés" : ($key == 1? "Francés" : ($key == 2? "Alemán" : "Ruso"))). " - Alumnos: $value<br>";
}

echo "<br>Nivel de Perfeccionamiento<br>";

foreach ($matriz[2] as $key => $value) {
    echo "Idioma: ". ($key == 0? "Inglés" : ($key == 1? "Francés" : ($key == 2? "Alemán" : "Ruso"))). " - Alumnos: $value<br>";
}

?>