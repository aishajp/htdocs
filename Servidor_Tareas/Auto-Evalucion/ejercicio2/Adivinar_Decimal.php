<?php
session_start(); 
 
if (!isset($_SESSION["numero_binario"])) { 
    $numero_binario = str_pad(decbin(rand(0, 15)), 4, "0", STR_PAD_LEFT); 
    $_SESSION["numero_binario"] = $numero_binario; 
} else { 
    $numero_binario = $_SESSION["numero_binario"]; 
} 
 
$cartas = str_split($numero_binario); 
 
echo "<h2>Adivina el número en decimal</h2>"; 
echo '<label>El numero en BINARIO:'.$numero_binario.'</label>'; 
echo '<br><br>';
foreach ($cartas as $bit) { 
    echo '<div style="display:inline-block; width:50px; height:50px; margin:5px; background-color:'.($bit == "1" ? "black" : "gray").';"></div>'; 
} 
 
echo '<form method="POST" action="Adivinar_Decimal21.php">';  
echo '<label>Numero decimal </label>'; 
echo '<input type="number" name="adivinar" min="0" max="15" required>'; 
echo '<button type="submit">Adivinar</button>'; 
echo '</form>'; 
?> 
