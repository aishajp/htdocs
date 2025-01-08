<?php
$colorFondo = isset($_COOKIE['color_fondo']) ? $_COOKIE['color_fondo'] : 'white';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['color'])) {
    $colorFondo = $_POST['color'];
    setcookie('color_fondo', $colorFondo, time() + 3600 * 24 * 30);