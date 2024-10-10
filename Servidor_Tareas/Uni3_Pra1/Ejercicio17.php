<?php

$animales = array("Lagartija", "Araña", "Perro", "Gato", "Raton");
$numeros = array(12,34,45,52,12);
$arbol = array("Sauce","Pino","Naranjo","Chopo","Perro","34");

$nuevoArray = array_merge($animales, $numeros, $arbol);

print_r($nuevoArray);


?>