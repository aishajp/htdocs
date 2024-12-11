<?php
session_start();
$host = 'localhost';
$dbname = 'cartas';
$user = 'root';
$password = '';

// Conectar a la base de datos
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}

// Nombre del usuario de la sesión
$nombreUsuario = $_SESSION['nombreUsuario'] ?? 'Usuario';

// Capturar los valores enviados desde el formulario
$pos1 = $_POST['pareja1'];
$pos2 = $_POST['pareja2'];
$cartas = $_SESSION['cartas'];
$intentos = $_SESSION['contador'] ?? 0;

// Comprobar si las posiciones seleccionadas son una pareja
$mensaje = '';
if ($cartas[$pos1 - 1] === $cartas[$pos2 - 1]) {
    $mensaje = "Acierto posiciones $pos1 y $pos2 después de $intentos intentos";
    $puntosCambio = 1;
} else {
    $mensaje = "Fallo posiciones $pos1 y $pos2 después de $intentos intentos";
    $puntosCambio = -1;
}

// Actualizar puntos y extra en la base de datos
try {
    $stmt = $pdo->prepare("UPDATE jugador SET puntos = puntos + :puntosCambio, Extra = Extra + :intentos WHERE Nombre = :nombre");
    $stmt->execute([
        ':puntosCambio' => $puntosCambio,
        ':intentos' => $intentos,
        ':nombre' => $nombreUsuario
    ]);
} catch (PDOException $e) {
    die("Error al actualizar datos: " . $e->getMessage());
}

// Obtener la tabla actualizada de jugadores
try {
    $stmt = $pdo->query("SELECT * FROM jugador");
    $jugadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error al obtener datos: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Bienvenid@, <?php echo htmlspecialchars($nombreUsuario); ?></h1>

    <p><strong><?php echo $mensaje; ?></strong></p>

    <p>Se le <?php echo ($puntosCambio > 0) ? 'sumará' : 'restará'; ?> 1 punto, así como <?php echo $intentos; ?> intentos.</p>

    <h2>Puntos por jugador</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Puntos</th>
            <th>Extra</th>
        </tr>
        <?php foreach ($jugadores as $jugador): ?>
            <tr>
                <td><?php echo htmlspecialchars($jugador['Nombre']); ?></td>
                <td><?php echo $jugador['puntos']; ?></td>
                <td><?php echo $jugador['Extra']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>