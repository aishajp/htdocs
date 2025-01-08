<?php
$a=-6;
$b=4;
$c=3;

echo "Ecuacion de segundo grado: $a*x^2 + $b*x + $c = 0<br>";

$discriminante = ($b**2) - (4*$a*$c);

if($discriminante < 0){
    echo "La ecuacion no tiene solucion real.";
}else if($discriminante == 0){
    $solucion = -$b / (2*$a);
    echo "La ecuación tiene una solución real: " . number_format($solucion, 2);
}else{
    $solucion1 = (-$b + sqrt($discriminante)) / (2*$a);
    $solucion2 = (-$b - sqrt($discriminante)) / (2*$a);
    echo "La ecuación tiene dos soluciones reales: " . number_format($solucion1, 2) . " y " . number_format($solucion2, 2);
}
?>
