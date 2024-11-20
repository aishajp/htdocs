<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form action="procesar_registro.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>
        
        <label for="repetir_contrasena">Repetir Contraseña:</label>
        <input type="password" id="repetir_contrasena" name="repetir_contrasena" required><br><br>
        
        <label for="rol">Rol:</label>
        <select id="rol" name="rol" required>
            <option value="estandar">Estándar</option>
            <option value="premium">Premium</option>
        </select><br><br>
        
        <input type="submit" value="Registrar">
        <input type="reset" value="Limpiar">
    </form>
    <br>
    <a href="acceso.php">Volver al inicio de sesión</a>
</body>
</html>