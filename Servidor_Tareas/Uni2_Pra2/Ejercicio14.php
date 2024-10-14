<?php

$ciudadesAsociativas = ["MD" => "Madrid", "BCN" => "Barcelona", "LND" => "Londres", "NY" => "New York", "LA" => "Los Angeles", "CHI" => "Chicago"];

foreach ($ciudadesAsociativas as $clave => $valor) {
    echo "La ciudad con el índice ". $clave. " tiene el nombre de ". $valor. ".<br>";
}
?>