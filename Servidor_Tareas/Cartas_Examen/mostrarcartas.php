<?php
// Generar 6 cartas (puedes cambiar esto para que sean imágenes)
$cartas = [];
for ($i = 1; $i <= 6; $i++) {
    $cartas[] = "copas_{$i}.jpg"; 
}
shuffle($cartas);

$cartas_levantadas = 0;
$cartas_mostradas = [];

if (isset($_POST['carta'])) {
    $carta = intval($_POST['carta']);
    $cartas_levantadas++;
    $cartas_mostradas[$carta] = $cartas[$carta];
}

function mostrarCartas($cartas, $cartas_mostradas) {
    $output = '';
    foreach ($cartas as $index => $carta) {
        if (isset($cartas_mostradas[$index])) {
            $output .= "<div class='carta'><img src='$carta' alt='Carta' /></div>";
        } else {
            // Cambiar aquí para mostrar la imagen boca_abajo.jpg
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
            line-height: 150px;
            color: white;
            font-size: 24px;
        }
        .carta img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <h1>Bienvenid@, !</h1>
    <div>
        <h2>CARTAS LEVANTADAS: <?php echo $cartas_levantadas; ?></h2>
        <h2>PAREJA: <input type="number" min="1" max="6" name="pareja" /></h2>
        <form method="post">
            <?php
            for ($i = 0; $i < 6; $i++) {
                echo "<button type='submit' name='carta' value='$i'>Levantar carta " . ($i + 1) . "</button>";
            }
            ?>
        </form>
    </div>
    <div>
        <?php echo mostrarCartas($cartas, $cartas_mostradas); ?>
    </div>
</body>
</html>