<?php
/* Obtener la fecha desde la URL si está definida */
$fecha_actual = new DateTime(); // Esto restaurará la funcionalidad original
$fecha_actual = new DateTime($fecha_param); // Crea un objeto DateTime con la fecha proporcionada

/* Obtener el mes y el día */
$mes = $fecha_actual->format('m');
$dia = $fecha_actual->format('d');

/* Determinar la estación del año */
$estacion = '';
if (($mes == 12 && $dia >= 21) || ($mes <= 2) || ($mes == 3 && $dia < 21)) {
    $estacion = 'invierno';
} elseif (($mes == 3 && $dia >= 21) || ($mes <= 5) || ($mes == 6 && $dia < 21)) {
    $estacion = 'primavera';
} elseif (($mes == 6 && $dia >= 21) || ($mes <= 8) || ($mes == 9 && $dia < 21)) {
    $estacion = 'verano';
} else {
    $estacion = 'otoño';
}

/* Asignar imagen de cabecera según la estación */
$imagen_estacion = '';
switch ($estacion) {
    case 'invierno':
        $imagen_estacion = 'images/invierno.jpg'; // Cambia el nombre por tu imagen de invierno
        break;
    case 'primavera':
        $imagen_estacion = 'images/primavera.jpg'; // Cambia el nombre por tu imagen de primavera
        break;
    case 'verano':
        $imagen_estacion = 'images/verano.jpg'; // Cambia el nombre por tu imagen de verano
        break;
    case 'otoño':
        $imagen_estacion = 'images/otono.jpg'; // Cambia el nombre por tu imagen de otoño
        break;
}

/* Obtener la hora actual */
$hora = $fecha_actual->format('H');

/* Determinar el color de fondo según la hora del día */
$color_fondo = '';
if ($hora >= 6 && $hora < 12) {
    $color_fondo = '#FFFAE5'; // Mañana - Color claro
} elseif ($hora >= 12 && $hora < 18) {
    $color_fondo = '#FFF8DC'; // Tarde - Color más cálido
} elseif ($hora >= 18 && $hora < 21) {
    $color_fondo = '#FFD700'; // Atardecer - Dorado
} else {
    $color_fondo = '#2F4F4F'; // Noche - Oscuro
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mi Portafolio</title>
    <link rel="stylesheet" href="style.css"> <!-- Ruta al archivo CSS -->
    <style>
        body {
            background-color: <?php echo $color_fondo; ?>; /* Color de fondo según la hora */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .cabecera {
            width: 100%;
            height: 300px;
            background: url('<?php echo $imagen_estacion; ?>') no-repeat center center;
            background-size: cover;
        }
    </style>
</head>
<body>

<header>
    <div class="cabecera"></div> <!-- Aquí se aplicará la imagen de la estación -->
    <h1>Mi Portafolio</h1>
    <nav>
        <ul>
            <li><a href="#about">Sobre Mí</a></li>
            <li><a href="#skills">Habilidades</a></li>
            <li><a href="#projects">Proyectos</a></li>
            <li><a href="#contact">Contacto</a></li>
        </ul>
    </nav>
</header>

<section id="about">
    <h2>Sobre Mí</h2>
    <p>Hola, soy Alejandro Carrasco Castellano, curso 2º de DAW en I.E.S. Gran Capitán, tengo experiencia en varios lenguajes de programación. Soy perfeccionista y enfocado en lo que hago.</p>
</section>

<section id="skills">
    <h2>Habilidades</h2>
    <div class="skills">
        <p><strong>Lenguajes:</strong> HTML, CSS, JavaScript, Java, PHP</p>
        <p><strong>Frameworks:</strong> React, Django, Bootstrap</p>
        <p><strong>Herramientas:</strong> Git, Figma, VS Code</p>
    </div>
</section>

<section id="projects">
    <h2>Proyectos</h2>
    <div class="projects">
        <div class="project">
            <h3>Proyecto 1</h3>
            <img src="images/proyecto1.png" alt="Proyecto 1" class="images">
            <p>Acabo de hacer unos cuantos bucles en DWEC.</p>
            <a href="https://github.com/ZeroGitIdea/DWEC/blob/main/UD1_CLIENTE/ACTIVIDADES/UD1/ejercicio1/js/index.js" target="_blank">Ver en GitHub</a>
        </div>
    </div>
</section>

<section id="contact">
    <h2>Contacto</h2>
    <div class="contact">
        <form action="#" method="POST">
            <input type="text" name="name" placeholder="Tu nombre" required>
            <input type="email" name="email" placeholder="Tu correo" required>
            <textarea name="message" placeholder="Escribe tu mensaje" required></textarea>
            <input type="submit" value="Enviar">
        </form>
    </div>
</section>

<footer>
    <p>© 2024 Alejandro Carrasco Castellano. Todos los derechos reservados.</p>
</footer>

</body>
</html>
