<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $resultados = [];
    $validar = true;

    //Validar y convertir en binario
    for($i = 0; $i<2; $i++){
        for($j=0; $j<3; $j++){
            $valor = $_POST["numero"][$i][$j];
            if(is_numeric($valor) && $valor>=1 && $valor<=100){
                $resultados[]=decbin($valor);
            }else{
                $validar = false;
            }

    }
}
if(!$validar){
    echo "<p> Todos los valores deben estar entre 1 y 100 </p>";   
}else{
    echo"<h3> Resultado en binario: </h3><ul>";
    foreach($resultados as $bin){
        echo "<li>$bin</li>";
    }
    echo "</ul>";
}

}else{
    //Mostrar formulario

echo "<form method= 'POST'>";
    for($i = 0; $i<2; $i++){
        for($j=0; $j<3; $j++){
            echo '<label>E .' . ($i) . '.' . ($j) . ': </label>'; 
            echo '<input type="text" name="numero[' . $i . '][' . $j . ']" required><br>';
        }
    }
    echo '<button type = "submit"> Calcular </button>';
    echo '</form>';
}
?>