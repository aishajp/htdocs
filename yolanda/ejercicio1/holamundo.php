<?php
   /* echo"<ol><h1><li>Aprendi a instalar xampp</li>
    <li>Arrancar el servicio Apache</li>
    <li>Ejecutar web</li></h1>
    </ol>";*/
    $contador = 0;
$suma = 0;

for($i = 10; $i<=50; $i=+10){
    $suma+=$i;
    $contador++;
}
$media = $suma /$contador;

echo "La media de los valores es: ".$media;
var_dump($M)/*Para ver la estructura del array que a guardado PHP*/
    ?>