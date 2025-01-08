<?php
    require_once "login.php";

    $conn = mysqli_connect($hn, $un, $pw, $db);
    
    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }

    $sql = "INSERT INTO usuarios (usu, contra,rol)VALUES('yolanda','yolanda','jugador')";
    if(mysqli_query($conn, $sql)){
        echo "New record created successfully";
    } else {
        echo "Error: ". $sql. "<br>". mysqli_error($conn);
    }
    mysqli_close($conn);
?>
