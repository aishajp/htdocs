<?php
/*Construir una calculadora, se ha de resolver con dos script, el primero muestra el 
formulario y el segundo el resultado. Al pulsar el botón ENVIAR se mostrará la suma 
de los valores introducidos en las cajas de texto. */

// Formulario

?>
<!DOCTYPE html>
<html>
<head>
<title>Calculadora</title>
</head>

<body>
    <h2>Calculadora</h2>
    <form action="calculadora_proceso.php" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Resetear">
        <br><br>
        <a href="calculadora_form.php">Volver al formulario</a>
        <br><br>
</form>