<?php
/* Definir el perfil del usuario: 'admin' o 'usuario' */
$perfil_usuario = 'admin'; // Cambiar a 'usuario' para el perfil de usuario estándar

/* Enlaces para el perfil Administrador */
$enlaces_administrador = [
    'Pagina1' => 'pagina1.php',
    'Pagina2' => 'pagina2.php',
    'Pagina3' => 'pagina3.php',
    'Pagina4' => 'pagina4.php',
];

/* Enlaces para el perfil Usuario */
$enlaces_usuario = [
    'Pagina1' => 'pagina1.php',
    'Pagina2' => 'pagina2.php',
];

/* Mostrar enlaces según el perfil del usuario */
$enlaces_mostrar = [];

if ($perfil_usuario == 'admin') {
    /* Si es administrador, mostrar todos los enlaces */
    $enlaces_mostrar = $enlaces_administrador;
} elseif ($perfil_usuario == 'usuario') {
    /* Si es usuario estándar, mostrar solo los enlaces permitidos */
    $enlaces_mostrar = $enlaces_usuario;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlaces según Perfil</title>
</head>
<body>

    <h1>Bienvenido, <?php echo ucfirst($perfil_usuario); ?></h1>
    <p>A continuación, tus enlaces disponibles:</p>

    <ul>
        <?php foreach ($enlaces_mostrar as $nombre_pagina => $url_pagina): ?>
            <li><a href="<?php echo $url_pagina; ?>"><?php echo $nombre_pagina; ?></a></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
