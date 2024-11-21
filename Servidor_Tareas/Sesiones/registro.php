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
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" id="contrasena" required>
        <br>
        <label for="repetir_contrasena">Repetir Contraseña:</label>
        <input type="password" name="repetir_contrasena" id="repetir_contrasena" required>
        <br>
        <label for="rol">Rol:</label>
        <select name="rol" id="rol" required>
            <option value="estandar">Estándar</option>
            <option value="premium">Premium</option>
        </select>
        <br>
        <button type="submit">Registrarse</button>
    </form>
</body>
</html>