<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';
    $repetir_contrasena = $_POST['repetir_contrasena'] ?? '';
    $rol = $_POST['rol'] ?? '';

    $usuarios_archivo = 'usuarios.txt';

    if (empty($usuario) || empty($contrasena) || empty($repetir_contrasena) || empty($rol)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    if ($contrasena !== $repetir_contrasena) {
        echo "Las contraseñas no coinciden.";
        exit;
    }

    if (!in_array($rol, ['estandar', 'premium'])) {
        echo "El rol especificado no es válido.";
        exit;
    }

    if (file_exists($usuarios_archivo)) {
        $usuarios = file($usuarios_archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($usuarios as $linea) {
            list($usuario_registrado, $hash_contrasena, $rol_registrado) = explode(':', $linea);
            if ($usuario === $usuario_registrado) {
                echo "El usuario ya está registrado.";
                exit;
            }
        }
    }

    $hash_contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
    file_put_contents($usuarios_archivo, "$usuario:$hash_contrasena:$rol\n", FILE_APPEND);
    echo "Usuario registrado exitosamente como $rol.";
} else {
    echo "Método no permitido.";
}
?>
<br>
<a href="acceso.php">Iniciar Sesión</a>
