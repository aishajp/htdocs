<?php
/*Crea un array llamado “lenguajes_cliente” y otro “lenguajes_servidor”, crea tu 
mismo los valores, poniendo índices alfanuméricos a cada valor con tres 
elementos cada uno. Junta ambos arrays en uno solo llamado “lenguajes” y 
muéstralo por pantalla en una tabla */

$lenguajes_cliente = ["JavaScript", "PHP", "Java"];
$lenguajes_servidor = ["Python", "Ruby", "C++"];

$lenguajes = array_merge($lenguajes_cliente, $lenguajes_servidor);

echo "<table border = 3>";

foreach ($lenguajes as $indice => $lenguaje) {
    echo "<tr>";
    echo "<td>". $indice. "</td>";
    echo "<td>". $lenguaje. "</td>";
    echo "</tr>";
}

echo "</table>";

?>