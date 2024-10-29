<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8</title>
</head>
<body>
    <h2>Ejercicio 8</h2>
    <label for="char1">Carácter 1:</label>
    <input type="text" id="char1" maxlength="1">
    <label for="char2">Carácter 2:</label>
    <input type="text" id="char2" maxlength="1">
    <button onclick="compararCaracteres()">Comparar</button>
    <p id="resultado"></p>

    <script>
        function compararCaracteres() {
            let char1 = document.getElementById("char1").value;
            let char2 = document.getElementById("char2").value;
            if (char1 > char2) {
                document.getElementById("resultado").innerText = `${char1} es mayor que ${char2}.`;
            } else if (char1 < char2) {
                document.getElementById("resultado").innerText = `${char2} es mayor que ${char1}.`;
            } else {
                document.getElementById("resultado").innerText = "Ambos caracteres son iguales.";
            }
        }
    </script>
</body>
</html>