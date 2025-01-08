<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $vector = [];
    $sum = 0;


    echo "Vector tiene 9 elementos:<br>";
    for ($i = 0; $i < 9; $i++) {
        $vector[$i] = isset($_POST["num$i"]) ? (int)$_POST["num$i"] : 0;
        echo "$i = " . $vector[$i] . "<br>";
        $sum += $vector[$i];
    }
    

    echo "La suma es $sum<br><br>";
}


echo "<form method='post'>";
for ($i = 0; $i < 9; $i++) {
    
    $value = isset($vector[$i]) ? $vector[$i] : '';
    echo <<<HTML
        <label for="num$i">$i:</label>
        <input type="text" id="num$i" name="num$i" value="$value" required>
        <br>
    HTML;
}
echo "<input type='submit' value='Enviar'>";
echo "</form>";
?>