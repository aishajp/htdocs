<?php
session_start();

// Array con los nombres de las imágenes de cartas
$imagenes = ['copas_02.jpg', 'copas_03.jpg', 'copas_05.jpg'];

// Función para inicializar las cartas
function inicializarCartas($imagenes) {
    // Duplicar las imágenes para formar las parejas (6 cartas en total, 3 pares)
    $cartas = array_merge($imagenes, $imagenes);

    // Si no hay una combinación guardada en sesión, generar una nueva
    if (!isset($_SESSION['cartas'])) {
        shuffle($cartas);
        $_SESSION['cartas'] = $cartas;
    } else {
        $cartas = $_SESSION['cartas'];
    }

    return $cartas;
}

// Función para inicializar o recuperar las cartas levantadas
function inicializarLevantadas() {
    // Inicializar o recuperar las cartas levantadas y su contador
    if (!isset($_SESSION['levantadas'])) {
        $_SESSION['levantadas'] = array_fill(0, 6, false);
        $_SESSION['contador'] = 0;
    }
}

// Función para manejar el levantamiento de cartas
function manejarLevantamiento() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Si se pulsa uno de los botones "Levantar carta"
        if (isset($_POST['levantar'])) {
            $indice = (int)$_POST['levantar'] - 1;
            // Reiniciar todas las cartas a boca abajo
            $_SESSION['levantadas'] = array_fill(0, 6, false);
            // Levantar solo la carta seleccionada
            $_SESSION['levantadas'][$indice] = true;
            $_SESSION['contador']++;
        }

        // Si se envía el formulario de comprobar pareja
        if (isset($_POST['pareja1'], $_POST['pareja2'])) {
            $_SESSION['pareja1'] = $_POST['pareja1'];
            $_SESSION['pareja2'] = $_POST['pareja2'];
            header('Location: resultado.php');
            exit;
        }

        // Reiniciar el juego
        if (isset($_POST['reiniciar'])) {
            session_destroy();
            header("Location: mostrarcartas.php");
            exit;
        }
    }
}

// Función para mostrar las cartas
function mostrarCartas($cartas) {
    echo '<div class="contenedor">';
    for ($i = 0; $i < count($cartas); $i++) {
        echo '<div class="carta">';
        if ($_SESSION['levantadas'][$i]) {
            echo '<img src="' . $cartas[$i] . '" alt="Carta levantada">';
        } else {
            echo '<img src="boca_abajo.jpg" alt="Carta boca abajo">';
        }
        echo '</div>';
    }
    echo '</div>';
}

// Función para mostrar los botones de "Levantar carta"
function mostrarBotones() {
    echo '<div class="botones">';
    echo '<form method="post">';
    for ($i = 1; $i <= 6; $i++) {
        echo '<button type="submit" name="levantar" value="' . $i . '">Levantar carta ' . $i . '</button>';
    }
    echo '</form>';
    echo '</div>';
}

// Función para mostrar el formulario de comprobación de pareja
function mostrarParejas() {
    echo '<div class="parejas">';
    echo '<form method="post">';
    echo '<label><strong>Pareja:</strong></label>';
    echo '<input type="number" min="1" max="6" name="pareja1" required>';
    echo '<input type="number" min="1" max="6" name="pareja2" required>';
    echo '<button type="submit">Comprobar</button>';
    echo '</form>';
    echo '</div>';
}

// Función para mostrar el formulario de reiniciar juego
function mostrarReiniciar() {
    echo '<form method="post">';
    echo '<button type="submit" name="reiniciar">Reiniciar Juego</button>';
    echo '</form>';
}

// Inicializar las cartas y las cartas levantadas
$cartas = inicializarCartas($imagenes);
inicializarLevantadas();
manejarLevantamiento();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Memoria - Jeroglífico del Día</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
        }
        .carta {
            width: 100px;
            height: 150px;
            display: inline-block;
            margin: 10px;
            border: 2px solid #000;
        }
        .carta img {
            width: 100%;
            height: 100%;
        }
        .contenedor {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            max-width: 650px;
            margin: 20px auto;
        }
        .info {
            margin: 20px 0;
        }
        .botones {
            margin-bottom: 20px;
        }
        button {
            margin: 5px;
            padding: 10px 20px;
            font-size: 16px;
        }
        .parejas {
            margin-top: 20px;
        }
        .parejas input {
            width: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Bienvenid@, <?php echo htmlspecialchars($_SESSION['login']); ?></h1>

    <div class="info">
        <label><strong>Cartas levantadas:</strong></label>
        <input type="text" value="<?php echo $_SESSION['contador']; ?>" readonly>
    </div>

    <?php 
        mostrarBotones();
        mostrarCartas($cartas);
        mostrarParejas();
        mostrarReiniciar();
    ?>
</body>
</html>