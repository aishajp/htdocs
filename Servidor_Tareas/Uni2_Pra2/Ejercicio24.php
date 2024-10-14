<?php
/* Crea un array llamado deportes e introduce los siguientes valores: futbol, 
baloncesto, natación, tenis. Haz el recorrido de la matriz con un for para mostrar 
sus valores. A continuación realiza las siguientes operaciones */

$deportes = ["futbol", "baloncesto", "natación", "tenis"];

// Mostrar los valores utilizando un bucle for
echo "Valores en el array:<br>";
for ($i = 0; $i < count($deportes); $i++) {
    echo $deportes[$i] . "<br>";
}

// Muestra el total de valores que contiene
$totalValores = count($deportes);
echo "Total de valores: $totalValores<br>";

// Sitúa el puntero en el primer elemento del array y muestra el valor actual
reset($deportes);
$valorActual = current($deportes);
echo "Valor actual (primer elemento): $valorActual<br>";

// Avanza una posición y muestra el valor actual
next($deportes);
$valorActual = current($deportes);
echo "Valor actual (después de avanzar): $valorActual<br>";

// Coloca el puntero en la última posición y muestra su valor
end($deportes);
$valorActual = current($deportes);
echo "Valor actual (último elemento): $valorActual<br>";

// Retrocede una posición y muestra este valor
prev($deportes);
$valorActual = current($deportes);
echo "Valor actual (después de retroceder): $valorActual<br>";
?>