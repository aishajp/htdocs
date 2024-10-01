<?php

$contador = 0;
$media = 0;

for($i = 1; $i<=5; $i++){
    $Media[$i] = $i * 10;
    $contador += $Media[$i];
}

$media = $contador /count($Media);//Cuenta todos los elementos en un array

echo "La media de los valores es: ".$media;

var_dump($Media)/*Para ver la estructura del array que a guardado PHP*/
?>