<?php
/* Crea un array multidimensional para poder guardar los componentes de dos 
familias: “Los Simpson” y “Los Griffin” dentro de cada familia ha de constar el 
padre, la madre y los hijos, donde padre, madre e hijos serán los índices y los 
nombres serán los valores. Esta estructura se ha de crear en un solo 
array asociativo de tres dimensiones.
Muestra los valores de las dos familias en una lista no numerada. */

$familias = array(
    "Los Simpson" => array(
        "Padre" => "Homer",
        "Madre" => "Marge",
        "Hijos" => array(
            "Bart",
            "Lisa",
            "Maggie"
        )
    ),
    "Los Griffin" => array(
        "Padre" => "Peter",
        "Madre" => "Lois",
        "Hijos" => array(
            "Meg",
            "Chris",
            "Stewie"
        )
    )
);

echo "<ul>";

foreach ($familias as $familia => $datos) {
    echo "<li>$familia<ul>";
    foreach ($datos as $parentesco => $nombre) {
        if ($parentesco === "Hijos") {
            foreach ($nombre as $hijo) {
                echo "<li>$hijo</li>";
            }
        } else {
            echo "<li>$parentesco: $nombre</li>";
        }
    }
    echo "</ul></li>";
}

echo "</ul>";
?>
