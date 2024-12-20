<?php


// Se accede a la sesión
session_name("simon-5");
session_start();

if (!isset($_SESSION["longitud"]) || !isset($_SESSION["objetivo"]) || !isset($_SESSION["jugador"]) || !isset($_SESSION["fallo"]) || !isset($_SESSION["completado"])) {
    header("Location:simon-5-1.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Simon (5).
    Minijuegos. Sesiones.
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Simon (5)</h1>

<?php
    print "  <h2>Secuencia de $_SESSION[longitud] colores</h2>\n";
    print "\n";
?>
  <form action="simon-5-3.php" method="get">
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
<?php
if (count($_SESSION["jugador"])) {
    print "\n";
    print "    <p>Colores elegidos:</p>\n";
    print "\n";
    print "    <p>\n";
    foreach ($_SESSION["jugador"] as $color) {
        print "      <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
        print "           width=\"50\" height=\"50\" viewBox=\"0 0 50 50\" style=\"background-color: $color\">\n";
        print "      </svg>\n";
    }
    print "    </p>\n";
}

if ($_SESSION["fallo"]) {
    print "\n";
    print "    <p>¡Lo siento! Se ha equivocado.</p>\n";
    print "\n";
    print "    <p>Pulse Reintentar para reintentar la misma secuencia o Reiniciar para comenzar de nuevo desde el principio.</p>\n";
    print "\n";
    print "    <p>\n";
    print "      <input type=\"submit\" name=\"eleccion\" value=\"Reintentar secuencia\">\n";
    print "      <input type=\"submit\" name=\"eleccion\" value=\"Reiniciar\">\n";
    print "    </p>\n";
}

if ($_SESSION["completado"]) {
    print "\n";
    print "    <p>¡Enhorabuena! Ha repetido correctamente la secuencia.</p>\n";
    print "\n";
    print "    <p>Pulse Siguiente para intentar una secuencia más larga o Repetir para intentar una secuencia de la misma longitud.</p>\n";
    print "\n";
    print "    <p>\n";
    print "      <input type=\"submit\" name=\"eleccion\" value=\"Siguiente nivel\">\n";
    print "      <input type=\"submit\" name=\"eleccion\" value=\"Repetir nivel\">\n";
    print "    </p>\n";
}
?>
  </form>

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
