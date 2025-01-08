<?php
session_start();

if (isset($_POST['pareja1']) && isset($_POST['pareja2'])) {
    $pos1 = (int)$_POST['pareja1'] - 1;
    $pos2 = (int)$_POST['pareja2'] - 1;

    if ($_SESSION['cartas'][$pos1] === $_SESSION['cartas'][$pos2]) {
        echo "<h1>¡Correcto! Has encontrado una pareja.</h1>";
    } else {
        echo "<h1>Intenta de nuevo. No es una pareja.</h1>";
    }
} else {
    echo "<h1>Error: Debes seleccionar dos cartas.</h1>";
}

echo '<a href="mostrarcartas.php">Volver al juego</a>';
?>