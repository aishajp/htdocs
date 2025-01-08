<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

<?php
    $a = isset($_POST['a']) ? $_POST['a'] : '';
    $b = isset($_POST['b']) ? $_POST['b'] : '';
    $resultado = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (is_numeric($a) && is_numeric($b)) {
            if (isset($_POST['operacion'])) {
                switch ($_POST['operacion']) {
                    case 'Suma':
                        $resultado = $a + $b;
                        break;
                    case 'Resta':
                        $resultado = $a - $b;
                        break;
                    case 'Multiplicacion':
                        $resultado = $a * $b;
                        break;
                    case 'Division':
                        if ($b != 0) {
                            $resultado = $a / $b;
                        } else {
                            $resultado = 'No se puede dividir entre 0';
                        }
                        break;
                }
            }
        } else {
            $resultado = 'Por favor, introduce números válidos';
        }
    }
?>

<form action="" method="post">
    <label for="a">A:</label>
    <input type="text" id="a" name="a" value="<?php echo htmlspecialchars($a); ?>"><br><br>

    <label for="b">B:</label>
    <input type="text" id="b" name="b" value="<?php echo htmlspecialchars($b); ?>"><br><br>

    <input type="submit" name="operacion" value="Suma">
    <input type="submit" name="operacion" value="Resta">
    <input type="submit" name="operacion" value="Multiplicacion">
    <input type="submit" name="operacion" value="Division">
</form>

<?php
    if ($resultado !== '') {
        echo "<h3>Resultado = $resultado</h3>";
    }
?>

</body>
</html>