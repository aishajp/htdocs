<?php
session_start();
 
//Inicializar
if(!isset($_SESSION["numero_secreto"])){
    $_SESSION["numero_secreto"] = rand(1, 100);
    $_SESSION["intentos"] = 0;
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $intento = intval($_POST["intento"]);
    $_SESSION["intentos"]++;

    if($intento > $_SESSION["numero_secreto"]){
        $mensaje= "El numero secreto es menor";
    } elseif($intento < $_SESSION["numero_secreto"]){
        $mensaje = "El numero secreto es mayor";
    } else{
        $mensaje = "Felicidades! Has acertado en ". $_SESSION["intentos"]. " intentos";
        unset($_SESSION["numero_secreto"]);
        unset($_SESSION["intentos"]);
    }
}
?>
<h3> Juego del Numero Secreto</h3>
<form method="POST">
    <label>Introduce un numero entre 1 y 100:</label>
    <input type="number" name="intento" min="1" max="100" required>
    <button type= "submit">Adivinar</button>
</form>
 <?php 
if(isset($mensaje)){
    echo "<p>".$mensaje."</p>";
    if(!isset($_SESSION["numero_secreto"])){
        echo'<a href="Numero_Secreto.php">Reiniciar Juego</a>';
    }
} 
?>