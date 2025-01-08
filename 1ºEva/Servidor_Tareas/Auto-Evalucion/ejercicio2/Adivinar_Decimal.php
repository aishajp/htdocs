<?php
session_start(); 
 
if (!isset($_SESSION["numero_binario"])) { 
    $numero_binario = str_pad(decbin(rand(0, 15)), 4, "0", STR_PAD_LEFT); 
    $_SESSION["numero_binario"] = $numero_binario; 
} else { 
    $numero_binario = $_SESSION["numero_binario"]; 
} 
 
$imagenes = [ 
    "ocho.jpg",
    "cuatro.jpg",  
    "dos.jpg", 
    "Uno.jpg" 
]; 
 
echo "<h2>Adivina el número en decimal</h2>"; 
echo '<label>El numero en BINARIO:'.$numero_binario.'</label>'; 
echo '<br><br>';

for ($i = 0; $i < 4; $i++) { 
    $bit = $numero_binario[$i]; 
    $imagen = ($bit == "1") ? $imagenes[$i] : "blanco.jpg"; 
    echo '<img src="' . $imagen . '" alt="Carta ' . $bit . '" style="width:50px; height:75px; margin:5px;">'; 
}
 
echo '<form method="POST" action="Adivinar_Decimal21.php">';  
echo '<label>Numero decimal </label>'; 
echo '<input type="number" name="adivinar" min="0" max="15" required>'; 
echo '<button type="submit">Adivinar</button>'; 
echo '</form>'; 
?>