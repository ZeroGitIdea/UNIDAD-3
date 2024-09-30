<?php
/** 
 * Crear un array con los alumnos de clase y seleccionar uno aleatoriamente.
 */

// Definir un array que contiene los alumnos y sus fotografías.
$alumnos = [
    [
        'nombre' => 'Juan Pérez',
        'foto' => 'images/juan.jpg' // Asegúrate de que esta ruta sea correcta
    ],
    [
        'nombre' => 'Ana Gómez',
        'foto' => 'images/ana.jpg'
    ],
    [
        'nombre' => 'Luis Rodríguez',
        'foto' => 'images/luis.jpg'
    ],
    [
        'nombre' => 'Marta Fernández',
        'foto' => 'images/marta.jpg'
    ],
    [
        'nombre' => 'Carlos Martínez',
        'foto' => 'images/carlos.jpg'
    ]
];

// Seleccionar un alumno aleatorio
$alumno_aleatorio = $alumnos[array_rand($alumnos)];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno Aleatorio</title>
    <link rel="stylesheet" href="style.css"> <!-- Asegúrate de tener tu CSS -->
</head>
<body>

<h1>Alumno Seleccionado Aleatoriamente</h1>

<div class="alumno">
    <h2><?php echo $alumno_aleatorio['nombre']; ?></h2>
    <img src="<?php echo $alumno_aleatorio['foto']; ?>" alt="<?php echo $alumno_aleatorio['nombre']; ?>" style="width:200px; height:auto;">
</div>

</body>
</html>
