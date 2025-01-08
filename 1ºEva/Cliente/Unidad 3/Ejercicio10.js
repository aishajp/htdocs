<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 10</title>
</head>
<body>
    <h2>Ejercicio 10</h2>
    <label for="operacion">Introduzca un operador (+, -, *, /):</label>
    <input type="text" id="operacion" maxlength="1">
    <button onclick="verificarOperacion()">Verificar</button>
    <p id="mensaje"></p>

    <script>
        function verificarOperacion() {
            let operacion = document.getElementById("operacion").value;
            if (['+', '-', '*', '/'].includes(operacion)) {
                document.getElementById("mensaje").innerText = "Es un operador válido.";
            } else {
                document.getElementById("mensaje").innerText = "No es un operador válido.";
            }
        }
    </script>
</body>
</html>