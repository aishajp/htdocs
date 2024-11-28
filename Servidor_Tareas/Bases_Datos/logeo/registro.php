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

    // Escapar entradas para evitar inyección SQL
    $usuario = $connection->real_escape_string($usuario);
    $password = $connection->real_escape_string($password);

    // Verificar si el usuario ya existe
    $sql = "SELECT usu FROM usuarios WHERE usu = '$usuario'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        echo "El nombre de usuario ya está registrado.";
    } else {
        // Insertar nuevo usuario
        $sql = "INSERT INTO usuarios (usu, contra) VALUES ('$usuario', '$password')";
        if ($connection->query($sql) === TRUE) {
            echo "Registro exitoso.";
        } else {
            echo "Error al registrar: " . $connection->error;
        }
    }
}

$connection->close();
?>