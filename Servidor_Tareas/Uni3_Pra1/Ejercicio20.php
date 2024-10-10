<?php

$estadioz_futbol = array(
    "Barcelona"=>"Camp Nou",
    "Real Madrid"=>"Santiago Bernabeu",
    "Valencia"=>"Mestalla",
    "Real Sociedad"=>"Anoeta"
);

/*Muestra los valores del array en una tabla, has de mostrar el índice y el valor 
asociado*/

echo "<table border='1'>";
echo "<tr><th>Estadio</th><th>Nombre</th></tr>";

foreach ($estadioz_futbol as $estadio => $nombre) {
    echo "<tr><td>$estadio</td><td>$nombre</td></tr>";
}

echo "</table>";
/* Elimina el estadio asociado al Real Madrid.*/

unset($estadioz_futbol["Real Madrid"]);

/*Vuelve a mostrar los valores para comprobar que el valor ha sido eliminado, esta vez en una lista numerada */

echo "<ul>";
foreach ($estadioz_futbol as $estadio => $nombre) {
    echo "<li>$estadio: $nombre</li>";
}
echo "</ul>";


?>