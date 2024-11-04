<?php
/* Generar una combinacion de 4 colores, y un boton de jugar.
Pantalla principal 4 circulos negros con 4 botones con 1 color 
diferente cada uno y luego comprobar si la combinacion que yo 
puse es igual a la q se mostro anteriormente y comprobarlo */

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Simon
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Simon</h1>

  <form action="simon-1-2.php" method="get">
    <p>Pulse en los colores:</p>

    <table>
      <tr>
        <td>
          <button type="submit" name="eleccion" value="red">
            <svg width="50" height="50" display=block border-radius=50% style="background-color: red">
            </svg>
          </button>
        </td>
        <td>
          <button type="submit" name="eleccion" value="yellow">
          <svg width="50" height="50" display=block border-radius=50% style="background-color: yellow">
            </svg>
          </button>
        </td>
      </tr>
      <tr>
        <td>
          <button type="submit" name="eleccion" value="blue">
          <svg width="50" height="50" display=block border-radius=50% style="background-color: blue">
            </svg>
          </button>
        </td>
        <td>
          <button type="submit" name="eleccion" value="green">
          <svg width="50" height="50" display=block border-radius=50% style="background-color: green">
            </svg>
          </button>
        </td>
      </tr>
    </table>

    <p><input type="submit" name="eleccion" value="Reiniciar"></p>
  </form>