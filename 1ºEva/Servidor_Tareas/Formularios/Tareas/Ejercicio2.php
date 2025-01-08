<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Edad</title>
</head>
<body>

    <h1>Resultado:</h1>
    <p id="resultado">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['edad'])) {
                $edadSeleccionada = $_POST['edad'];
                $mensaje = "";

                switch ($edadSeleccionada) {
                    case "menos14":
                        $mensaje = "Eres una personita";
                        break;
                    case "15a20":
                        $mensaje = "Todavía eres muy joven";
                        break;
                    case "21a40":
                        $mensaje = "Eres una persona joven";
                        break;
                    case "41a60":
                        $mensaje = "Eres una persona madura";
                        break;
                    case "mas60":
                        $mensaje = "Ya eres una persona mayor";
                        break;
                }

                echo $mensaje;
            } else {
                echo "Aún no me has dicho tu edad";
            }
        }
        ?>
    </p>

</body>
</html>