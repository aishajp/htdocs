<?php
/*Escribe una función que reciba una cadena 
y comprueba si es un palíndromo */

function isPalindrome($str) {
    // Eliminar espacios, caracteres especiales y convertir a minúsculas
    $str = strtolower(preg_replace('/[^a-z0-9]/', '', $str));

    // Comparar la cadena con su inverso
    return $str === strrev($str);
}
?>