<?php
session_start();

// Inicializar el contador si no existe
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}

// Revisar si se ha enviado una acción en el formulario
if (isset($_POST['accion'])) {
    // Aumentar o disminuir el contador según el botón presionado
    if ($_POST['accion'] === 'incrementar') {
        $_SESSION['contador']++;
    } elseif ($_POST['accion'] === 'decrementar') {
        $_SESSION['contador']--;
    } elseif ($_POST['accion'] === 'cerrar') {
        // Destruir la sesión y redirigir para resetear el contador
        session_destroy();
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador</title>
</head>
<body>
    <h1>Contador</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <button type="submit" name="accion" value="decrementar">-</button>
        <span><?php echo $_SESSION['contador']; ?></span>
        <button type="submit" name="accion" value="incrementar">+</button>
    </form>
    <p>Valor actual: <?php echo $_SESSION['contador']; ?></p>
    
    <!-- Botón para cerrar la sesión y resetear el contador -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <button type="submit" name="accion" value="cerrar">Cerrar</button>
    </form>
</body>
</html>