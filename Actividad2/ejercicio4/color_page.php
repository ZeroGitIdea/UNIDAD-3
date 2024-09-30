<?php
/**
 * Mostrar el color de fondo seleccionado y cambiar el color del texto según el fondo
 */
$color = isset($_GET['color']) ? $_GET['color'] : '#FFFFFF'; // Color por defecto: blanco

// Determinar el color del texto basado en el color de fondo
$textColor = '#FFFFFF'; // Por defecto, el texto es blanco
if ($color === '#FFFFFF') {
    $textColor = '#000000'; // Si el fondo es blanco, el texto será negro
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Seleccionado</title>
    <link rel="stylesheet" href="style.css"> <!-- Enlace al CSS -->
    <style>
        body {
            background-color: <?php echo $color; ?>; /* Color de fondo */
            color: <?php echo $textColor; ?>; /* Color del texto */
            text-align: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
        }
    </style>
</head>
<body>

<p>Este es el color seleccionado: <?php echo htmlspecialchars($color); ?></p>

</body>
</html>
