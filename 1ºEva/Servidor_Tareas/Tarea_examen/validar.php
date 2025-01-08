<?php 
session_start(); 
/*conectarse a la base de datos*/ 
require_once "login.php";
if (isset($_POST['enviar'])) { 

$Nombre = $_POST['usu']; 
$Clave = $_POST['pass']; 
$connection = new mysqli($hn, $un, $pw, $db); 

if ($connection->connect_error) { 
    die("Connection failed: ". $connection->connect_error); 
}else{ 
    $sql = "SELECT Nombre, Clave FROM usuarios WHERE Nombre = '$Nombre' AND Clave = '$Clave'"; 
    $result = $connection->query($sql); //llamo a la sentencia de SELECT  

    if($result -> num_rows > 0){ 
        header("Location: inicio.php");
        die();
    }else{ 
        header("Location: formulario.php");
        die();
    } 
    $connection->close(); 
}
}    
?> 