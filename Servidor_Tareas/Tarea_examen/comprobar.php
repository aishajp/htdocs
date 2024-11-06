<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}

$combinacion = $_SESSION['combinacion'];
$seleccionUsuario = $_SESSION['seleccion_usuario'];
$acierto = ($combinacion === $seleccionUsuario);

// Limpiar la selección para una nueva partida
$_SESSION['seleccion_usuario'] = [];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado del Juego</h2>
    <?php if ($acierto): ?>
        <p>¡Correcto! Has adivinado la secuencia.</p>
    <?php else: ?>
        <p>Fallaste. La secuencia correcta era:</p>
        <?php
        foreach ($combinacion as $color) {
            echo "<div style='width: 50px; height: 50px; background-color: $color; display: inline-block; border-radius: 50%; margin: 5px;'></div>";
        }
        ?>
        <p>Tu selección fue:</p>
        <?php
        foreach ($seleccionUsuario as $color) {
            echo "<div style='width: 50px; height: 50px; background-color: $color; display: inline-block; border-radius: 50%; margin: 5px;'></div>";
        }
        ?>
    <?php endif; ?>
    <form action="inicio.php">
        <button type="submit">Volver a jugar</button>
    </form>
</body>
</html>
