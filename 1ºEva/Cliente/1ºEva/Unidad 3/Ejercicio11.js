<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 11</title>
</head>
<body>
    <h2>Ejercicio 11</h2>
    <input type="number" id="num1">
    <input type="number" id="num2">
    <input type="text" id="operador" maxlength="1" placeholder="Operador (+, -, *, /)">
    <button onclick="calcular()">Calcular</button>
    <p id="resultado"></p>

    <script>
        function calcular() {
            let num1 = parseFloat(document.getElementById("num1").value);
            let num2 = parseFloat(document.getElementById("num2").value);
            let operador = document.getElementById("operador").value;
            let resultado;
            switch (operador) {
                case '+':
                    resultado = num1 + num2;
                    break;
                case '-':
                    resultado = num1 - num2;
                    break;
                case '*':
                    resultado = num1 * num2;
                    break;
                case '/':
                    resultado = num2 !== 0 ? num1 / num2 : "Error: División por cero";
                    break;
                default:
                    resultado = "Operador no válido";
            }
            document.getElementById("resultado").innerText = `Resultado: ${resultado}`;
        }
    </script>
</body>
</html>