<?php
// Verificar si existe la cookie del color de fondo
$colorFondo = isset($_COOKIE['color_fondo']) ? $_COOKIE['color_fondo'] : 'white';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['color'])) {
    $colorFondo = $_POST['color'];
    // Crear la cookie con duración de 30 días
    setcookie('color_fondo', $colorFondo, time() + (30 * 24 * 60 * 60));
    // Recargar la página para aplicar el color seleccionado
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración del color de fondo</title>
</head>
<body style="background-color: <?= htmlspecialchars($colorFondo) ?>;">
    <h1>Selecciona el color de fondo</h1>
    <form method="POST" action="">
        <label>
            <input type="radio" name="color" value="white" <?= $colorFondo === 'white' ? 'checked' : '' ?>>
            Blanco
        </label><br>
        <label>
            <input type="radio" name="color" value="lightblue" <?= $colorFondo === 'lightblue' ? 'checked' : '' ?>>
            Azul claro
        </label><br>
        <label>
            <input type="radio" name="color" value="lightgreen" <?= $colorFondo === 'lightgreen' ? 'checked' : '' ?>>
            Verde claro
        </label><br><br>
        <button type="submit">Guardar color</button>
    </form>
    <br>
    <a href="pagina2.php">Ir a la otra página</a>
</body>
</html>