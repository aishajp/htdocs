<?php

// Se accede a la sesión
session_name("simon-5");
session_start();

if (!isset($_SESSION["longitud"]) || !isset($_SESSION["objetivo"]) || !isset($_SESSION["jugador"]) || !isset($_SESSION["fallo"]) || !isset($_SESSION["completado"])) {
    header("Location:simon-5-1.php");
    exit;
}

// Función de recogida de datos
function recoge($key, $type = "")
{
    if (!is_string($key) && !is_int($key) || $key == "") {
        trigger_error("Function recoge(): Argument #1 (\$key) must be a non-empty string or an integer", E_USER_ERROR);
    } elseif ($type !== "" && $type !== []) {
        trigger_error("Function recoge(): Argument #2 (\$type) is optional, but if provided, it must be an empty array or an empty string", E_USER_ERROR);
    }
    $tmp = $type;
    if (isset($_REQUEST[$key])) {
        if (!is_array($_REQUEST[$key]) && !is_array($type)) {
            $tmp = trim(htmlspecialchars($_REQUEST[$key]));
        } elseif (is_array($_REQUEST[$key]) && is_array($type)) {
            $tmp = $_REQUEST[$key];
            array_walk_recursive($tmp, function (&$value) {
                $value = trim(htmlspecialchars($value));
            });
        }
    }
    return $tmp;
}

$colores = ["red", "yellow", "green", "blue"];

$eleccion = recoge("eleccion");

if ($_SESSION["fallo"] && $eleccion == "Reintentar secuencia") {
    $_SESSION["jugador"] = [];
    $_SESSION["fallo"]   = false;
    header("Location:simon-5-1.php");
    exit;
}

if ($_SESSION["fallo"] && $eleccion == "Reiniciar") {
    session_destroy();
    header("Location:simon-5-1.php");
    exit;
}

if ($_SESSION["completado"] && $eleccion == "Siguiente nivel") {
    $_SESSION["longitud"] += 1;
    unset($_SESSION["objetivo"]);
    for ($i = 0; $i < $_SESSION["longitud"]; $i++) {
        $_SESSION["objetivo"][] = $colores[array_rand($colores)];
    }
    $_SESSION["jugador"]    = [];
    $_SESSION["fallo"]      = false;
    $_SESSION["completado"] = false;
    header("Location:simon-5-1.php");
    exit;
}

if ($_SESSION["completado"] && $eleccion == "Repetir nivel") {
    unset($_SESSION["objetivo"]);
    for ($i = 0; $i < $_SESSION["longitud"]; $i++) {
        $_SESSION["objetivo"][] = $colores[array_rand($colores)];
    }
    $_SESSION["jugador"]    = [];
    $_SESSION["fallo"]      = false;
    $_SESSION["completado"] = false;
    header("Location:simon-5-1.php");
    exit;
}

if (!$_SESSION["fallo"] && !$_SESSION["completado"] && in_array($eleccion, ["red", "yellow", "green", "blue"])) {
    $_SESSION["jugador"][] = $eleccion;
    $_SESSION["fallo"]     = false;
    for ($i = 0; $i < count($_SESSION["jugador"]); $i++) {
        if ($_SESSION["jugador"][$i] != $_SESSION["objetivo"][$i]) {
            $_SESSION["fallo"] = true;
        }
    }
    if (!$_SESSION["fallo"] && count($_SESSION["jugador"]) == count($_SESSION["objetivo"])) {
        $_SESSION["completado"] = true;
    }
}

header("Location:simon-5-2.php");