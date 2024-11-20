<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';
    $repetir_contrasena = $_POST['repetir_contrasena'] ?? '';
    $rol = $_POST['rol'] ?? '';

    if (!empty($usuario) && !empty($contrasena) && !empty($repetir_contrasena) && !empty($rol)) {
        if ($contrasena === $repetir_contrasena) {
            
            echo "Registro exitoso.<br>";
            echo "Usuario: " . htmlspecialchars($usuario) . "<br>";
            echo "Rol: " . htmlspecialchars($rol) . "<br>";
        } else {
            echo "Las contraseñas no coinciden. Intenta nuevamente.";
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
}
?>
<br>
<a href="registro.php">Volver al registro</a>
<br>
<a href="acceso.php">Volver al inicio de sesión</a>
