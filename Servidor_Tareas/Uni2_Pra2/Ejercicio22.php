<?php

$array = array(5 => 1, 12 => 2, 13 => 56, "x" => 42);

echo "Contenido inicial del array: <br>";
print_r($array);

echo "<br>Número de elementos: ". count($array). "<br>";

unset($array[5]);

echo "Contenido del array después de borrar la posición 5: <br>";

print_r($array);
 
/*borra el array */

unset($array);

echo "<br>Contenido del array después de borrar el array: <br>";
print_r($array);
?>