<?php 
    require_once "login.php"; 
    $connection = new mysqli($hn, $un, $pw, $db); 
    if($connection -> connect_error)die("Fatal Error"); 
    $query = "SELECT usu, contra,rol FROM usuarios"; 
    $result = $connection->query($query); 
    if(!$result)die("Fatal Error"); 
    $rows = $result->num_rows; 
    for($i = 0; $i < $rows; ++$i) { 
        $result->data_seek($i); 
        echo 'Usuario: '.htmlspecialchars($result->fetch_assoc()['usu']).'<br>';
        $result->data_seek($i); 
        echo 'Rol: '.htmlspecialchars($result->fetch_assoc()['rol']).'<br>';
    } 
?> 