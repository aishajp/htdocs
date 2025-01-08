<?php
/*Crea una matriz para guardar a los amigos clasificados por diferentes ciudades. 
Los valores serán los siguientes:
En madrid: nombre Pedro, edad 32, telefono 91-999.99.99
En Barcelona: nombre Susana, edad 34, telefono 93-000.00.00.00
En Toledo: nombre Sonia, edad 42, telefono 925-09.09.09
Haz un recorrido del array multidimensional mostrando los valores de tal manera 
que nos muestre en cada ciudad que amigos tiene*/

$amigos = [
    "Madrid" => [
        ["nombre" => "Pedro", "edad" => 32, "telefono" => "91-999.99.99"]
    ],
    "Barcelona" => [
        ["nombre" => "Susana", "edad" => 34, "telefono" => "93-000.00.00.00"]
    ],
    "Toledo" => [
        ["nombre" => "Sonia", "edad" => 42, "telefono" => "925-09.09.09"]
    ]
    
];

foreach ($amigos as $ciudad => $amigos_ciudad) {
    echo "Amigos en $ciudad:<br>";
    foreach ($amigos_ciudad as $amigo) {
        echo "Nombre: ". $amigo["nombre"]. ", Edad: ". $amigo["edad"]. ", Teléfono: ". $amigo["telefono"]. "<br>";
    }
    echo "<br>";
}

?>