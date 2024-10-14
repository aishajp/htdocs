<?php

 $animales = array("Lagartija", "Araña", "Perro", "Gato", "Raton");
$numeros = array(12,34,45,52,12);
 $arbol = array("Sauce","Pino","Naranjo","Chopo","Perro","34");
 $nuevoArray = array();
 
 foreach($animales as $animal){
     array_push($nuevoArray, $animal);
 }
 
 foreach($numeros as $numero){
     array_push($nuevoArray, $numero);
 }
 
 foreach($arbol as $fruta){
     array_push($nuevoArray, $fruta);
 }
 echo "<br>18. Array original:<br>";
 print_r($nuevoArray);

/*muestralo en orden inverso */
 echo "<br>19. Array en orden inverso:<br>";
 rsort($nuevoArray);
 print_r($nuevoArray);

?>