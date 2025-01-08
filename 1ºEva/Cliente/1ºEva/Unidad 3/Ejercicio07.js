<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7</title>
</head>
<body>
    <h2>Ejercicio 7</h2>
    <label for="char">Introduzca un carácter:</label>
    <input type="text" id="char" maxlength="1">
    <button onclick="verificarCaracter()">Verificar</button>
    <p id="mensaje"></p>

    <script>
        function verificarCaracter() {
            let char = document.getElementById("char").value;
            if (/^[a-zA-Z]$/.test(char)) {
                document.getElementById("mensaje").innerText = "Es un carácter alfabético.";
            } else {
                document.getElementById("mensaje").innerText = "No es un carácter alfabético.";
            }
        }
    </script>
</body>
</html>