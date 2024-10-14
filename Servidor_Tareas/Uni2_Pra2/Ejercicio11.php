<?php

$peliculasVistas = [
    "Enero" => 9,
    "Febrero" => 12,
    "Marzo" => 0,
    "Abril" => 17
];

echo "Películas vistas en los meses:<br>";

foreach($peliculasVistas as $mes => $numeroPeliculas) {
    if($numeroPeliculas > 0) {
        echo "$mes: $numeroPeliculas películas<br>";
    }
}

?>