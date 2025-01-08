<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 12</title>
</head>
<body>
    <h2>Ejercicio 12</h2>
    <button onclick="calcularTiempo()">Calcular tiempo desde el fin del mundo maya</button>
    <p id="resultado"></p>

    <script>
        function calcularTiempo() {
            let fechaFinMundo = new Date(2012, 10, 21); // 21 de Noviembre de 2012
            let fechaActual = new Date();
            let diferencia = fechaActual - fechaFinMundo;

            let dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
            let segundos = Math.floor(diferencia / 1000);

            document.getElementById("resultado").innerText = `Han pasado ${dias} días o ${segundos} segundos desde el 21/11/2012.`;
        }
        
        // Llamada a la función
        calcularTiempo();
    </script>
    
</body>

</html>
