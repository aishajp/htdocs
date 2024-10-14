<?php
/*Escribe un script para probar algunas de las funciones mostradas debajo, el sript 
ha de contener al menos tres funciones de cada bloque: 

- Funciones variables empty($var), is_null($var) and isset($var)

- Funciones de cadena strlen($cad), stetolower($cad) and str($cad1, $cad2)

- Funciones de array ksort($arr), count($arr) and array_keys($arr)
*/

//Funcion para comprobar si una variable está vacía

function isEmpty($var) {
    return empty($var);
}

//Funcion para comprobar si una variable es nula

function isNull($var) {
    return is_null($var);
}

//Funcion para comprobar si una variable está definida

function issetVar($var) {
    return isset($var);
}

//Funcion para calcular la longitud de una cadena

function strlenCadena($cad) {
    return strlen($cad);
}

//Funcion para convertir una cadena a minúsculas

function strToLowerCadena($cad) {
    return strtolower($cad);
}

//Funcion para concatenar dos cadenas

function strConcatCadenas($cad1, $cad2) {
    return $cad1. $cad2;
}

//Funcion para ordenar un array alfabéticamente

function ksortArray($arr) {
    ksort($arr);
    return $arr;
}

//Funcion para contar el número de elementos de un array

function countArray($arr) {
    return count($arr);
}

//Funcion para obtener las claves de un array

function getArrayKeys($arr) {
    return array_keys($arr);
}

//Ejemplos

$var1 = null;
$var2 = "";
$var3 = "Hola, mundo!";

echo "Variable 1 es vacía: ". isEmpty($var1). "<br>";

echo "Variable 2 es nula: ". isNull($var2). "<br>";

echo "Variable 3 está definida: ". issetVar($var3). "<br>";

echo "Longitud de la cadena 3: ". strlenCadena($var3). "<br>";

echo "Cadena 3 en minúsculas: ". strToLowerCadena($var3). "<br>";

$cadenaConcatenada = strConcatCadenas("Hola ", "mundo!");

echo "Cadena concatenada: ". $cadenaConcatenada. "<br>";

$array = ["uno" => 1, "dos" => 2, "tres" => 3];

echo "Array ordenado alfabéticamente: ". implode(", ", ksortArray($array)). "<br>";

echo "Número de elementos en el array: ". countArray($array). "<br>";

echo "Claves del array: ". implode(", ", getArrayKeys($array)). "<br>";
?>