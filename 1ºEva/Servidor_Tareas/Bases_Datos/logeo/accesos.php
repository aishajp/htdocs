<?php 
session_start(); 
/*conectarse a la base de datos*/ 
require_once "login.php";  
$usuario = $_POST['usu']; 
$password = $_POST['pass']; 
$connection = new mysqli($hn, $un, $pw, $db); 


if ($connection->connect_error) { 
    die("Connection failed: ". $connection->connect_error); 
}else{ 
    $sql = "SELECT usu, contra FROM usuarios WHERE usu = '$usuario' AND contra = '$password'"; 
    $result = $connection->query($sql); //llamo a la sentencia de SELECT  
    $uValido = $result ->fetch_assoc()['usu']; 
    $result -> data_seek(0); 
    $pValido = $result ->fetch_assoc()['contra']; 

    if($uValido == $usuario && $pValido == $password){ 
        echo "Has iniciado correctamente"; 
    }else{ 
        echo "Usuario o contraseña incorrectos"; 
    } 
    $connection->close(); 
} 