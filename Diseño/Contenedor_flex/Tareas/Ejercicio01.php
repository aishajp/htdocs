<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <?php
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = (int)$_POST['num1'];
        $num2 = (int)$_POST['num2'];
        $resultado = $num1 + $num2;

        echo "La suma de $num1 + $num2 es $resultado";
    } else {
        echo "Por favor, introduce los números correctamente.";
    }
    ?>
</body>
</html>
