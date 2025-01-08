<?php
session_start(); 

$usuarios_archivo = 'usuarios.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';

    if (empty($usuario) || empty($contrasena)) {
        echo "Por favor completa todos los campos.";
        exit;
    }

    if (file_exists($usuarios_archivo)) {
        $usuarios = file($usuarios_archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($usuarios as $linea) {
            list($usuario_registrado, $hash_contrasena, $rol) = explode(':', $linea);
            if ($usuario === $usuario_registrado && password_verify($contrasena, $hash_contrasena)) {
                $_SESSION['usuario'] = $usuario;
                $_SESSION['rol'] = $rol;
                echo "Bienvenido, " . htmlspecialchars($usuario) . " (Rol: " . htmlspecialchars($rol) . ")!";
                exit;
            }
        }
    }

    echo "Usuario o contraseña incorrectos.";
} else {
    echo "Método no permitido.";
}
?>