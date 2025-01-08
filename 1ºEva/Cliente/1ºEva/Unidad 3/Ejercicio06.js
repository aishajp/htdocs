<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
</head>
<body>
    <h2>Ejercicio 6</h2>
    <label for="num1">Número 1:</label>
    <input type="number" id="num1">
    <label for="num2">Número 2:</label>
    <input type="number" id="num2">
    <button onclick="sumar()">Sumar</button>
    <p id="resultado"></p>

    <script>
        function sumar() {
            let num1 = parseFloat(document.getElementById("num1").value);
            let num2 = parseFloat(document.getElementById("num2").value);
            document.getElementById("resultado").innerText = `Resultado: ${num1 + num2}`;
        }
    </script>
</body>
</html>
