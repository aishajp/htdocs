<?php


// Se accede a la sesión
session_name("simon-1");
session_start();

if (!isset($_SESSION["colores"])) {
    $_SESSION["colores"] = [];
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Simon (1).
    Minijuegos. Sesiones.
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Simon (1)</h1>

  <form action="simon-1-2.php" method="get">
    <p>Haga clic en los colores:</p>

    <table>
      <tr>
        <td>
          <button type="submit" name="eleccion" value="red">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                 width="50" height="50" viewBox="0 0 50 50" style="background-color: red">
            </svg>
          </button>
        </td>
        <td>
          <button type="submit" name="eleccion" value="yellow">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                 width="50" height="50" viewBox="0 0 50 50" style="background-color: yellow">
            </svg>
          </button>
        </td>
      </tr>
      <tr>
        <td>
          <button type="submit" name="eleccion" value="blue">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                 width="50" height="50" viewBox="0 0 50 50" style="background-color: blue">
            </svg>
          </button>
        </td>
        <td>
          <button type="submit" name="eleccion" value="green">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                 width="50" height="50" viewBox="0 0 50 50" style="background-color: green">
            </svg>
          </button>
        </td>
      </tr>
    </table>

    <p><input type="submit" name="eleccion" value="Reiniciar"></p>
  </form>

<?php
if (count($_SESSION["colores"])) {
    print "  <p>Colores: elegidos:</p>\n";
    print "\n";
    print "  <p>\n";
    foreach ($_SESSION["colores"] as $color) {
        print "    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
        print "         width=\"50\" height=\"50\" viewBox=\"0 0 50 50\" style=\"background-color: $color\">\n";
        print "    </svg>\n";
    }
    print "  </p>\n";
}

?>

  <footer>
    <p class="ultmod">
      Última modificación de esta página:
      <time datetime="2023-12-05">5 de diciembre de 2023</time>
    </p>

    <p class="licencia">
      Este programa forma parte del curso <strong><a href="https://www.mclibre.org/consultar/php/">Programación
      web en PHP</a></strong> de <a href="https://www.mclibre.org/" rel="author">Bartolomé Sintes Marco</a>.<br>
      El programa PHP que genera esta página se distribuye bajo
      <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.
    </p>
  </footer>
</body>
</html>
