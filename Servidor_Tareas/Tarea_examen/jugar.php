<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['color'])) {
    // Asegura que 'seleccion_usuario' está inicializado como array
    if (!isset($_SESSION['seleccion_usuario'])) {
        $_SESSION['seleccion_usuario'] = [];
    }
    $_SESSION['seleccion_usuario'][] = $_POST['color'];
}

// Verifica si 'seleccion_usuario' está definido y es un array antes de usar count()
if (isset($_SESSION['seleccion_usuario']) && count($_SESSION['seleccion_usuario']) === 4) {
    header('Location: comprobar.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Selecciona la Secuencia</title>
    <style>
        .circulo-negro {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: inline-block;
            margin: 5px;
        }
        .boton-color {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin: 5px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h3>Selecciona la secuencia de colores</h3>
    <div>
        <?php 
        // Mostrar los colores seleccionados o negro si no hay seleccion
        for ($i = 0; $i < 4; $i++): 
            $color = isset($_SESSION['seleccion_usuario'][$i]) ? $_SESSION['seleccion_usuario'][$i] : 'black';
        ?>
            <div class="circulo-negro" style="background-color: <?= htmlspecialchars($color) ?>;"></div>
        <?php endfor; ?>
    </div>
    <form action="jugar.php" method="post">
        <?php
        // Botones de selección de color
        foreach (['red', 'blue', 'yellow', 'green'] as $color) {
            echo "<button type='submit' name='color' value='$color' class='boton-color' style='background-color: $color;'></button>";
        }
        ?>
    </form>
</body>
</html>