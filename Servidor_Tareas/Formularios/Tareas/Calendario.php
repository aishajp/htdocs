<?php
// Mostrar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Si se han enviado los datos del formulario, procesamos
if (isset($_POST['mes']) && isset($_POST['anio'])) {
    $mes = intval($_POST['mes']);
    $anio = intval($_POST['anio']);
    mostrar_calendario($mes, $anio);
} else {
    // Mostrar el formulario
    echo '<form method="post" action="">
        Introduce un mes: <input type="text" name="mes" value="" />
        Introduce un año: <input type="text" name="anio" value="" />
        <input type="submit" value="enviar" />
    </form>';
}

// Función para mostrar el calendario
function mostrar_calendario($mes, $anio) {
    $nombre_mes = dame_mes($mes);

    echo '<table border="1" cellpadding="4" cellspacing="0">';
    echo '<tr><th colspan="7" style="background-color: blue; color: white;">Calendario ' . $nombre_mes . ' ' . $anio . '</th></tr>';
    echo '<tr>
        <td>L</td>
        <td>M</td>
        <td>X</td>
        <td>J</td>
        <td>V</td>
        <td>S</td>
        <td>D</td>
    </tr>';

    // Calculamos el primer día de la semana y el último día del mes
    $primer_dia = calcula_diasemana(1, $mes, $anio); // 0 = Lunes, ..., 6 = Domingo
    $ultimo_dia = ultimoDia($mes, $anio);

    // Variables de control
    $dia_actual = 1;
    $numero_dia_semana = $primer_dia;

    // Primera fila de la semana
    echo '<tr>';
    for ($i = 0; $i < 7; $i++) {
        if ($i < $primer_dia) {
            echo '<td>&nbsp;</td>'; // Días vacíos antes del primer día
        } else {
            echo '<td>' . $dia_actual . '</td>';
            $dia_actual++;
        }
    }
    echo '</tr>';

    // Rellenar el resto del mes
    while ($dia_actual <= $ultimo_dia) {
        echo '<tr>';
        for ($i = 0; $i < 7; $i++) {
            if ($dia_actual <= $ultimo_dia) {
                echo '<td>' . $dia_actual . '</td>';
                $dia_actual++;
            } else {
                echo '<td>&nbsp;</td>'; // Celdas vacías al final del mes
            }
        }
        echo '</tr>';
    }
    echo '</table>';
}

// Funciones auxiliares
function dame_mes($mes) {
    $meses = [
        1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril', 5 => 'Mayo', 6 => 'Junio',
        7 => 'Julio', 8 => 'Agosto', 9 => 'Septiembre', 10 => 'Octubre', 11 => 'Noviembre', 12 => 'Diciembre'
    ];
    return $meses[$mes];
}

function calcula_diasemana($dia, $mes, $anio) {
    // Devuelve el número de día de la semana (1 = Lunes, ..., 7 = Domingo)
    $dia_semana = date('N', strtotime("$anio-$mes-$dia")) - 1;
    return $dia_semana;
}

function ultimoDia($mes, $anio) {
    return date("t", strtotime("$anio-$mes-01"));
}
?>