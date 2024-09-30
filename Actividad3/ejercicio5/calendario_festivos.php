<?php
/** 
 * 5. Mejorar el calendario con un array de los días festivos: colores diferentes,
 * nacionales, comunidad, locales.
 */

// Establecer el mes y año deseados
$mes = 9; // Septiembre
$año = 2024;

// Obtener el día actual
$día_actual = date('j');

// Crear un array de días festivos con sus tipos
$festivos = [
    1 => ['nombre' => 'Día de la Hispanidad', 'tipo' => 'nacional'], // 1 de Octubre
    12 => ['nombre' => 'Día de la Constitución', 'tipo' => 'nacional'], // 12 de Octubre
    8 => ['nombre' => 'Día de la Comunidad', 'tipo' => 'comunidad'], // 8 de Septiembre
    15 => ['nombre' => 'Día Local', 'tipo' => 'local'], // 15 de Septiembre
];

// Calcular el primer día del mes
$primer_dia = mktime(0, 0, 0, $mes, 1, $año);
$días_del_mes = date('t', $primer_dia); // Total de días en el mes
$nombre_mes = date('F', $primer_dia); // Nombre del mes

// Obtener el día de la semana del primer día del mes
$inicio_semana = date('w', $primer_dia);

// Crear un array para el calendario
$calendario = [];

// Llenar el calendario
for ($i = 0; $i < $inicio_semana; $i++) {
    $calendario[] = ''; // Espacios vacíos antes del primer día
}

for ($día = 1; $día <= $días_del_mes; $día++) {
    $calendario[] = $día; // Agregar cada día del mes
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calendario de <?php echo $nombre_mes . ' ' . $año; ?></title>
</head>
<body>
    <h1>Calendario de <?php echo ucfirst($nombre_mes) . ' ' . $año; ?></h1>
    <table>
        <tr>
            <th>Domingo</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sábado</th>
        </tr>
        <tr>
            <?php
            // Mostrar los días en el calendario
            foreach ($calendario as $día) {
                if ($día === '') {
                    echo '<td></td>'; // Celda vacía
                } else {
                    $clase = '';

                    // Verificar si es el día actual
                    if ($día == $día_actual) {
                        $clase = 'hoy'; // Clase para el día actual
                    }
                    
                    // Verificar si es un festivo
                    if (array_key_exists($día, $festivos)) {
                        switch ($festivos[$día]['tipo']) {
                            case 'nacional':
                                $clase = 'festivo-nacional'; // Clase para festivos nacionales
                                break;
                            case 'comunidad':
                                $clase = 'festivo-comunidad'; // Clase para festivos de comunidad
                                break;
                            case 'local':
                                $clase = 'festivo-local'; // Clase para festivos locales
                                break;
                        }
                    }

                    echo "<td class='$clase'>$día" . (array_key_exists($día, $festivos) ? "<br><small>{$festivos[$día]['nombre']}</small>" : '') . "</td>";
                }

                // Nueva fila cada 7 días
                if ((($día + $inicio_semana) % 7) == 0) {
                    echo '</tr><tr>';
                }
            }
            ?>
        </tr>
    </table>
</body>
</html>
