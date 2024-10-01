<?php
//Sumar las diagonales de una matriz de 4x4

$matriz = array(
    array(15,10,25,8),
    array(3,2,1,7),
    array(19,25,10,8),
    array(9,15,25,13)
);

$dprincipal=0;
$dsecundaria=0;
//Con dos bucles:
/*for($i = 0; $i<4; $i++){
    $dprincipal += $matriz[$i][$i];
}
echo "La suma de la diagonal principal es: ".$dprincipal;

/*for($i = 0; $i<4; $i++){
    $dsecundaria += $matriz[$i][3-$i];
}
echo "<br>La suma de la diagonal secundaria es: ".$dsecundaria;*/
for($i = 0; $i<4; $i++){
   
    $dprincipal += $matriz[$i][$i];
    $dsecundaria += $matriz[$i][3-$i];
}
echo "La suma de la diagonal principal es: ".$dprincipal;
echo "<br>La suma de la diagonal secundaria es: ".$dsecundaria;

?>