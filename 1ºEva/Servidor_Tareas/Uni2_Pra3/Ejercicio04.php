<?php
function filterNumbers($numbers, $limit) {
    return array_filter($numbers, function ($number) use ($limit) {
        return $number < $limit;
    });
}

// Ejemplo de uso
$numbers = [10, 5, 3, 12, 8, 1, 20];
$limit = 7;
$filteredNumbers = filterNumbers($numbers, $limit);

echo "Números menores que $limit: " . implode(", ", $filteredNumbers) . 
"<br>";
?>
