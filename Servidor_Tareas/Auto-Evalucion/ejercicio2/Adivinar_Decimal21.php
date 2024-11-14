<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_SESSION["numero_binario"])){
    $numero_decimal = bindec($_SESSION["numero_binario"]);
    $adivinar = $_POST["adivinar"];
    
    if ($numero_decimal == $adivinar){
        echo "<h3>Respuesta acertada el número es, $numero_decimal</h3>";
}else{
    echo "<h3>Has fallado, vuelve a jugar</h3>";
}
//Limpiar y reiniciar 
unset($_SESSION["numero_binario"]);
echo '<br><a href="Adivinar_Decimal.php">Volver a jugar</a>';
}
?>