<?php
session_start();

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $clave = $_POST['clave'] ?? '';

    // Simulamos una autenticación
    if ($usuario === 'usuario' && $clave === '1234') { // Credenciales fijas para la prueba
        $_SESSION['usuario'] = $usuario;
        header('Location: inicio.php');
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
</head>
<body>
    <h2>Inicia sesión</h2>
    <form action="index.php" method="post">
        Usuario: <input type="text" name="usuario" required><br>
        Contraseña: <input type="password" name="clave" required><br>
        <button type="submit">Iniciar sesión</button>
    </form>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
</body>
</html>
