<?php

$num1=50;
$num2=30;
echo "Los numeros son: ".$num1." y ".$num2."<br>";
if($num1 == $num2){
    echo "Los numeros son iguales";
    $solucion = $num1 * $num2;
    echo "<br>La multiplicacion es: ".$solucion;
}else if ($num1 > $num2){
    echo "El numero mayor es: ".$num1;
    $solucion = $num1 - $num2;
    echo "<br>La resta es: ".$solucion;
}else{
    echo "El numero mayor es: ".$num2;
    $solucion = $num2 + $num1;
    echo "<br>La suma es: ".$solucion;
}
?>