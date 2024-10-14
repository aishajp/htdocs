<?php

$pares = array();

for ($i = 0; $i < 10; $i++) {
    $pares[] = 2 * $i;
}

foreach ($pares as $par) {
    echo $par. "\n";
}

?>