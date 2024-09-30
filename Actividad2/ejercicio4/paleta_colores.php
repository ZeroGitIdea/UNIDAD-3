<?php
/**
 * 4. Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor hexadecimal que le corresponde.
 * Cada celda será un enlace a una página que mostrará un fondo de pantalla con el color seleccionado.
 */

// Array de colores con sus respectivos valores hexadecimales
$colores = [
    "Rojo" => "#FF0000",
    "Verde" => "#00FF00",
    "Azul" => "#0000FF",
    "Amarillo" => "#FFFF00",
    "Cyan" => "#00FFFF",
    "Magenta" => "#FF00FF",
    "Naranja" => "#FFA500",
    "Violeta" => "#800080",
    "Gris" => "#808080",
    "Negro" => "#000000",
    "Blanco" => "#FFFFFF"
];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paleta de Colores</title>
    <link rel="stylesheet" href="style.css"> <!-- Enlace al CSS -->
</head>
<body>

<h1>Paleta de Colores</h1>
<table>
    <tr>
        <th>Color</th>
        <th>Valor Hexadecimal</th>
    </tr>
    <?php
    // Mostrar los colores en la tabla
    foreach ($colores as $nombre => $hex) {
        echo "<tr>";
        echo "<td style='background-color: $hex;'><a href='color_page.php?color=" . urlencode($hex) . "' style='text-decoration: none; color: #000;'>$nombre</a></td>";
        echo "<td>$hex</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
