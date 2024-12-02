<?php 
session_start(); 
/*conectarse a la base de datos*/ 
function validar(){
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
        echo "inicio.php";
    }else{ 
        echo "formulario.php";
    } 
    $connection->close(); 
}
}    
}

?> 


<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>simon</title> 
</head> 

<body> 

    <h1>Inicio de Sesión</h1> 
    <form method="POST" action="<?php validar(); ?>"> 
        <label for="Nombre">Usuario:</label><br> 
        <input type="text" name="usu"/><br> 
        <label for="Clave">Contraseña:</label><br> 
        <input type="password" name="pass"/><br> 
        <input type="submit" name="enviar" value="Iniciar sesion"/> 
    </form> 
</body> 
</html>