<?php

$coches =[32,11,45,22,78,-3,9,66,5];

echo"El elemento en la posicion 5 es: " . $coches[5] . "<br>";

?>

<?php

$importe = [32.583, 11.239, 45.781, 22.237];

echo "El elemento en la posición 1 es: " . $importe[1] . "<br>";

echo "El elemento en la posición 3 es: " . $importe[3] . "<br>";


?>

<?php
 

$confirmado = [true, true, false, true, false, false];

echo "El elemento en la posición 0 es: " . $confirmado[0] . "<br>";

?>

<?php

$jugador = ["Crovic", "Antic", "Malic", "Zulic", "Rostrich"];

echo "La alineación del equipo está compuesta por " . implode(", ", $jugador). ".";

?>