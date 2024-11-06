<?php


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
    <p>Memoriza la siguiente combinacion</p>

    <table>
      <tr>
        <td>
          <button type="submit" name="eleccion" value="red" style="border-radius:50%">
            <svg width="100" height="100" display=block border-radius=50% style="background-color: red; border-radius:50%">
            </svg>
          </button>
        </td>
        <td>
          <button type="submit" name="eleccion" value="yellow" style="border-radius:50%">
          <svg width="100" height="100" display=block  style="background-color: yellow; border-radius:50%">
            </svg>
          </button>
        </td>
      </tr>
      <tr>
        <td>
          <button type="submit" name="eleccion" value="blue" style="border-radius:50%">
          <svg width="100" height="100" display=block border-radius=50% style="background-color: blue; border-radius:50%">
            </svg>
          </button>
        </td>
        <td>
          <button type="submit" name="eleccion" value="green" style="border-radius:50%" >
          <svg width="100" height="100" display=block border-radius=50% style="background-color: green; border-radius:50%">
            </svg>
          </button>
        </td>
      </tr>
    </table>

    <p><input type="submit" name="eleccion" value="JUGAR"></p>
  </form>