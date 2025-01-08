<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 9</title>
</head>
<body>
    <h2>Ejercicio 9</h2>
    <label for="numero">Introduzca un número:</label>
    <input type="text" id="numero">
    <button onclick="verificarNumero()">Verificar</button>
    <p id="mensaje"></p>

    <script>
        function verificarNumero() {
            let numero = document.getElementById("numero").value;
            if (!isNaN(numero) && numero.trim() !== "") {
                document.getElementById("mensaje").innerText = "Es un número válido.";
            } else {
                document.getElementById("mensaje").innerText = "No es un número válido.";
            }
        }
    </script>
</body>
</html>