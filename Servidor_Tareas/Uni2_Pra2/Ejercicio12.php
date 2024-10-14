<?php

$persona = array(
    "nombre" => "Pedro Torres",
    "direccion" => "C/Mayor, 37",
    "telefono" => "123456789"
);

echo "<ul>";
echo "<li>Nombre: " . $persona["nombre"] . "</li>";
echo "<li>Dirección: " . $persona["direccion"]. "</li>";
echo "<li>Número de teléfono: " . $persona["telefono"]. "</li>";
echo "</ul>";
?>