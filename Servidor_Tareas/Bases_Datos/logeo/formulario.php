<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title> 
</head> 

<body> 

    <h1>Inicio de Sesión</h1> 
    <form method="POST" action="accesos.php"> 
        <label for="usuario">Usuario:</label><br> 
        <input type="text" name="usu"/><br> 
        <label for="password">Contraseña:</label><br> 
        <input type="password" name="pass"/><br> 
        <p>¿No tienes cuenta?</p> <a href="#">Regístrate</a><br> 
        <input type="submit" name="enviar" value="Enviar"/> 
    </form> 
</body> 
</html> 