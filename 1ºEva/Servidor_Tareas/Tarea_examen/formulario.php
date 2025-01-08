<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>simon</title> 
</head> 

<body> 

    <h1>Inicio de Sesión</h1> 
    <form method="POST" action="validar.php"> 
        <label for="Nombre">Usuario:</label><br> 
        <input type="text" name="usu"/><br> 
        <label for="Clave">Contraseña:</label><br> 
        <input type="password" name="pass"/><br> 
        <input type="submit" name="enviar" value="Iniciar sesion"/> 
    </form> 
</body> 
</html>