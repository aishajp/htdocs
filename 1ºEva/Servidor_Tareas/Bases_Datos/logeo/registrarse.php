<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form method="POST" action="registro.php">
        <label for="usuario">Usuario:</label><br>
        <input type="text" name="usu" required/><br>

        <label for="password">Contraseña:</label><br>
        <input type="password" name="pass" required/><br>

        <label for="confirm_password">Confirmar Contraseña:</label><br>
        <input type="password" name="confirm_pass" required/><br>

        <label for="rol">Rol:</label><br>
        <select name="rol" required>
            <option value="jugador">Jugador</option>
        </select><br><br>

        <input type="submit" name="registrar" value="Registrar"/>
    </form>
    <p><a href="formulario.php">Volver al inicio de sesión</a></p>
</body>
</html>