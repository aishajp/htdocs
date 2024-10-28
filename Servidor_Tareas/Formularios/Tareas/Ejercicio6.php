<?php

$numElements = isset($_POST["num_elements"]) ? (int)$_POST["num_elements"] : 0;
$showInputs = isset($_POST["show_inputs"]);
$values = [];
$sum = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST" && $showInputs) {

    echo "El vector tiene $numElements elementos:<br>";
    for ($i = 0; $i < $numElements; $i++) {
        $values[$i] = isset($_POST["value$i"]) ? (int)$_POST["value$i"] : 0;
        echo "$i = " . $values[$i] . "<br>";
        $sum += $values[$i];
    }
    echo "La suma es $sum<br><br>";
}


echo "<form method='post'>";
if ($numElements == 0 || !$showInputs) {

echo <<<HTML
        <label for="num_elements">Número de Elementos:</label>
        <input type="text" id="num_elements" name="num_elements" required>
        <input type="submit" name="accept" value="Aceptar">
    HTML;
} else {

    echo "<input type='hidden' name='num_elements' value='$numElements'>";
    echo "<input type='hidden' name='show_inputs' value='1'>";
    for ($i = 0; $i < $numElements; $i++) {
        $value = isset($values[$i]) ? $values[$i] : '';
        echo <<<HTML
            <label for="value$i">$i:</label>
            <input type="text" id="value$i" name="value$i" value="$value" required>
            <br>
        HTML;
    }
    echo "<input type='submit' value='Enviar'>";
}
echo "</form>";
?>