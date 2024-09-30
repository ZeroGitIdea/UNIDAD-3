<?php
// Definimos el tamaño del paso para incrementar los valores RGB
$step = 15;

// Creamos un array para almacenar todos los colores generados
$colores = [];

// Generamos todos los colores RGB combinando valores de R, G y B
for ($r = 0; $r <= 255; $r += $step) { // Iterar sobre el componente rojo
    for ($g = 0; $g <= 255; $g += $step) { // Iterar sobre el componente verde
        for ($b = 0; $b <= 255; $b += $step) { // Iterar sobre el componente azul
            // Creamos el color en formato hexadecimal
            $hex = sprintf("#%02X%02X%02X", $r, $g, $b);
            // Agregamos el color y su representación RGB al array
            $colores[] = ['nombre' => "RGB($r, $g, $b)", 'hex' => $hex];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paleta de Colores RGB</title>
    <style>
        /* Estilos para los cuadros de colores */
        .color-box {
            width: 50px; /* Ancho de los cuadros de color */
            height: 50px; /* Alto de los cuadros de color */
            display: inline-block; /* Mostrar en línea para que formen una cuadrícula */
            margin: 1px; /* Margen entre cuadros */
            cursor: pointer; /* Cambiar el cursor al pasar sobre el cuadro */
            border: 1px solid #000; /* Borde negro alrededor de cada cuadro */
            position: relative; /* Para permitir el posicionamiento del texto dentro */
        }

        /* Estilos para el texto del valor hexadecimal */
        .hex-value {
            position: absolute; /* Posicionamiento absoluto para el texto */
            bottom: 0; /* Alinear el texto al fondo del cuadro */
            left: 0; /* Alinear a la izquierda */
            right: 0; /* Alinear a la derecha */
            text-align: center; /* Centrar el texto */
            font-size: 10px; /* Tamaño de fuente del valor hexadecimal */
            color: white; /* Color del texto en blanco */
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7); /* Sombra para mejorar legibilidad */
        }
    </style>
</head>
<body>
    <h1>Selecciona un color</h1> <!-- Título de la página -->
    <div>
        <?php foreach ($colores as $color): ?> <!-- Iterar sobre cada color generado -->
            <a href="fondo.php?color=<?= urlencode($color['hex']) ?>"> <!-- Enlace a fondo.php con el color seleccionado -->
                <div class="color-box" style="background-color: <?= $color['hex'] ?>;"> <!-- Cuadro de color -->
                    <div class="hex-value"><?= $color['hex'] ?></div> <!-- Muestra el valor hexadecimal -->
                </div>
            </a>
        <?php endforeach; ?> <!-- Fin del bucle -->
    </div>
</body>
</html>
