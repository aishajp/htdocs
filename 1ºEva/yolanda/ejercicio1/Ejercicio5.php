<?php
$a=5;
$b=-9;
$c=3;

echo "Ecuacion de segundo grado: $a*x^2 + $b*x + $c = 0<br>";

$discriminante = ($b**2) - (4*$a*$c);

if($discriminante < 0){
    echo "La ecuacion no tiene solucion real.";
}else if($discriminante == 0){
    $solucion = -$b / (2*$a);
    echo "La ecuacion tiene una solucion real: $solucion";
}else{
    $solucion1 = (-$b + sqrt($discriminante)) / (2*$a);
    $solucion2 = (-$b - sqrt($discriminante)) / (2*$a);
    echo "La ecuacion tiene dos soluciones reales: $solucion1 y $solucion2";
}
?>
