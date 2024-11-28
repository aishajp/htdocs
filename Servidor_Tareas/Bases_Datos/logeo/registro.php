<?php
require_once "login.php"; // Credenciales de conexión

// Conectar a la base de datos
$connection = new mysqli($hn, $un, $pw, $db);

if ($connection->connect_error) {
    die("Error de conexión: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST['usu'];
    $password = $_POST['pass'];
    $confirm_password = $_POST['confirm_pass'];
    $rol = $_POST['rol'];

    // Validar contraseñas
    if ($password !== $confirm_password) {
        echo "Las contraseñas no coinciden. <a href='registrarse.php'>Intenta de nuevo</a> o <a href='formulario.php'>Regresa al inicio</a>.";
        exit;
    }

    // Escapar entradas para evitar inyección SQL
    $usuario = $connection->real_escape_string($usuario);
    $password = $connection->real_escape_string($password);
    $rol = $connection->real_escape_string($rol);

    // Verificar si el usuario ya existe
    $sql = "SELECT usu FROM usuarios WHERE usu = '$usuario'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        echo "El nombre de usuario ya está registrado. <a href='registrarse.php'>Intenta con otro nombre</a> o <a href='formulario.php'>Regresa al inicio</a>.";
    } else {
        // Insertar nuevo usuario
        $sql = "INSERT INTO usuarios (usu, contra, rol) VALUES ('$usuario', '$password', '$rol')";
        if ($connection->query($sql) === TRUE) {
            echo "Registro exitoso. <a href='formulario.php'>Inicia sesión</a>.";
        } else {
            echo "Error al registrar: " . $connection->error . " <a href='registrarse.php'>Intenta de nuevo</a>.";
        }
    }
}

$connection->close();
?>