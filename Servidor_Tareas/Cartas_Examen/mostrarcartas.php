<?php
session_start();

// Generar las cartas en parejas (solo 6 cartas en parejas de 2)
if (!isset($_SESSION['cartas'])) {
    // Crear 3 pares de cartas
    $cartas = ['copas_02.jpg', 'copas_02.jpg', 'copas_03.jpg', 'copas_03.jpg', 'copas_05.jpg', 'copas_05.jpg'];
    shuffle($cartas); // Mezclar las cartas
    $_SESSION['cartas'] = $cartas; // Guardar en sesión
    $_SESSION['cartas_levantadas'] = 0; // Inicializar contador de cartas levantadas
    $_SESSION['carta_mostrada'] = null; // Carta actualmente mostrada
}

$cartas = $_SESSION['cartas'];
$cartas_levantadas = $_SESSION['cartas_levantadas'];
$carta_mostrada = $_SESSION['carta_mostrada'];

// Manejar levantamiento de carta
if (isset($_POST['carta'])) {
    $carta_index = intval($_POST['carta']);
    $_SESSION['carta_mostrada'] = $carta_index; // Guardar la carta mostrada
    $_SESSION['cartas_levantadas'] += 1; // Incrementar el contador
}

function mostrarCartas($cartas, $carta_mostrada) {
    $output = '';
    foreach ($cartas as $index => $carta) {
        if ($index === $carta_mostrada) {
            // Mostrar la carta seleccionada
            $output .= "<div class='carta'><img src='$carta' alt='Carta' /></div>";
        } else {
            // Mostrar las cartas boca abajo
            $output .= "<div class='carta'><img src='boca_abajo.jpg' alt='Carta boca abajo' /></div>";
        }
    }
    return $output;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego de Cartas</title>
    <style>
        .carta {
            width: 100px;
            height: 150px;
            display: inline-block;
            margin: 5px;
            text-align: center;
        }
        .carta img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <h1>Bienvenid@ <?php echo $_SESSION["login"]?>!</h1>
    <h2>Cartas levantadas: <?php echo $cartas_levantadas; ?></h2>

    <form method="post">
        <?php
        // Generar los botones para levantar las cartas
        for ($i = 0; $i < 6; $i++) {
            echo "<button type='submit' name='carta' value='$i'>Levantar carta " . ($i + 1) . "</button>";
        }
        ?>
    </form>

    <div>
        <?php
        // Mostrar las cartas según el estado actual
        echo mostrarCartas($cartas, $carta_mostrada);
        ?>
    </div>
</body>
</html>