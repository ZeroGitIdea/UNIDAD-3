<?php
// Habilitamos la visualización de errores para facilitar la depuración
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Obtenemos el color de fondo a partir de la URL. 
// Si no se proporciona, usamos blanco como color por defecto.
$color = isset($_GET['color']) ? $_GET['color'] : '#FFFFFF'; 

// Función para calcular la luminosidad de un color hexadecimal
function calcularLuminosidad($hex) {
    // Eliminar el símbolo '#' al inicio del color hexadecimal
    $hex = ltrim($hex, '#');
    
    // Convertir cada par de dígitos hexadecimales a valores decimales (RGB)
    $r = hexdec(substr($hex, 0, 2)); // Componente rojo
    $g = hexdec(substr($hex, 2, 2)); // Componente verde
    $b = hexdec(substr($hex, 4, 2)); // Componente azul
    
    // Calcular la luminosidad utilizando la fórmula ponderada
    // Los coeficientes reflejan la sensibilidad del ojo humano a diferentes colores
    return (0.299 * $r + 0.587 * $g + 0.114 * $b);
}

// Calcular la luminosidad del color de fondo
$luz = calcularLuminosidad($color);

// Determinar el color del texto basado en la luminosidad calculada
// Se usa un umbral de 186 para decidir si el texto debe ser negro o blanco
$textoColor = ($luz > 186) ? 'black' : 'white'; // Negro para colores claros, blanco para oscuros

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color de Fondo</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Aplicar el color de fondo obtenido desde la URL */
        body {
            background-color: <?= htmlspecialchars($color) ?>; /* Color de fondo seguro */
            color: <?= $textoColor ?>; /* Color del texto basado en la luminosidad */
            font-family: Arial, sans-serif; /* Establecer la fuente del texto */
        }
    </style>
</head>
<body>
    <h1>El fondo es de color <?= htmlspecialchars($color) ?></h1>
    <a href="colores.php">Volver a la paleta de colores</a> <!-- Enlace para regresar a la paleta -->
</body>
</html>
