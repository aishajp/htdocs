<?php
session_start();

// Generar combinación de colores aleatoria
$colores = ['red', 'blue', 'yellow', 'green'];
$combinacion = [];
for ($i = 0; $i < 4; $i++) {
    $combinacion[] = $colores[rand(0, count($colores) - 1)];
}
$_SESSION['combinacion'] = $combinacion;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio del Juego</title>
    <style>
        .circulo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: inline-block;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h3>Combinación de colores generada</h3>
    <?php
    foreach ($combinacion as $color) {
        echo "<div class='circulo' style='background-color: $color;'></div>";
    }
    ?>
    <form action="jugar.php" method="post">
        <button type="submit">¡Vamos a jugar!</button>
    </form>
</body>
</html>