<?php

$usu = 'pepito';
$contra = '123';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usu_form = $_POST['usuario'] ?? '';
    $contra_form = $_POST['contrasena'] ?? '';

    if ($usu_form === $usu && $contra_form === $contra) {
        echo "Bienvenid@ " . htmlspecialchars($usu_form);
    } else {
        echo "Los datos introducidos no son correctos.";
    }
} else {
    echo "Acceso no permitido.";
}
?>
