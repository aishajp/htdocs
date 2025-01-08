<?php
function isPalindrome($str) {
    // Eliminar espacios, caracteres especiales y convertir a minúsculas
    $str = strtolower(preg_replace('/[^a-z0-9]/', '', $str));

    // Comparar la cadena con su inverso
    return $str === strrev($str);
}

// Ejemplo de uso
$testStrings = [
    "A man, a plan, a canal, Panama!",
    "No lemon, no melon",
    "anilina"
];

foreach ($testStrings as $test) {
    if (isPalindrome($test)) {
        echo "\"$test\" es un palíndromo.<br>";
    } else {
        echo "\"$test\" no es un palíndromo.<br>";
    }
}
?>
