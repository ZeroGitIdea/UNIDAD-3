<?php
/** 
 * Definir el menú del restaurante con primeros, segundos y postres.
 */

// Array que contiene los primeros platos
$primeros = [
    [
        'nombre' => 'Ensalada César',
        'precio' => 8.50,
        'foto' => 'images/ensalada_cesar.jpg' // Asegúrate de que esta ruta sea correcta
    ],
    [
        'nombre' => 'Sopa de Tomate',
        'precio' => 6.00,
        'foto' => 'images/sopa_tomate.jpg'
    ],
    [
        'nombre' => 'Carpaccio de Ternera',
        'precio' => 9.00,
        'foto' => 'images/carpaccio.jpg'
    ]
];

// Array que contiene los segundos platos
$segundos = [
    [
        'nombre' => 'Filete de Salmón',
        'precio' => 15.00,
        'foto' => 'images/filete_salmón.jpg'
    ],
    [
        'nombre' => 'Pollo al Horno',
        'precio' => 12.00,
        'foto' => 'images/pollo_horno.jpg'
    ],
    [
        'nombre' => 'Lasaña Vegetariana',
        'precio' => 11.50,
        'foto' => 'images/lasagna_vegetariana.jpg'
    ],
    [
        'nombre' => 'Rabo de Toro',
        'precio' => 18.00,
        'foto' => 'images/rabo_toro.jpg'
    ],
    [
        'nombre' => 'Bacalao a la Vizcaína',
        'precio' => 17.00,
        'foto' => 'images/bacalao_vizcaina.jpg'
    ]
];

// Array que contiene los postres
$postres = [
    [
        'nombre' => 'Tarta de Chocolate',
        'precio' => 5.00,
        'foto' => 'images/tarta_chocolate.jpg'
    ],
    [
        'nombre' => 'Flan Casero',
        'precio' => 3.50,
        'foto' => 'images/flan.jpg'
    ],
    [
        'nombre' => 'Helado de Vainilla',
        'precio' => 4.00,
        'foto' => 'images/helado_vainilla.jpg'
    ]
];

// Función para calcular el precio total del menú con un descuento del 20%
function calcularPrecioMenu($primer, $segundo, $postre) {
    $precio_total = $primer['precio'] + $segundo['precio'] + $postre['precio'];
    $descuento = $precio_total * 0.20; // 20% de descuento
    return $precio_total - $descuento;
}

// Ejemplo de selección de un menú (1 de cada tipo)
$menu_seleccionado = [
    'primer' => $primeros[0], // Ensalada César
    'segundo' => $segundos[1], // Pollo al Horno
    'postre' => $postres[2]    // Helado de Vainilla
];

// Calcular el precio del menú
$precio_menu = calcularPrecioMenu($menu_seleccionado['primer'], $menu_seleccionado['segundo'], $menu_seleccionado['postre']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú del Restaurante</title>
    <link rel="stylesheet" href="style.css"> <!-- Asegúrate de tener tu CSS -->
</head>
<body>

<h1>Menú del Restaurante</h1>

<h2>Primeros Platos</h2>
<div class="menu">
    <?php foreach ($primeros as $plato): ?>
        <div class="plato">
            <h3><?php echo $plato['nombre']; ?></h3>
            <img src="<?php echo $plato['foto']; ?>" alt="<?php echo $plato['nombre']; ?>" style="width:150px; height:auto;">
            <p>Precio: €<?php echo number_format($plato['precio'], 2); ?></p>
        </div>
    <?php endforeach; ?>
</div>

<h2>Segundos Platos</h2>
<div class="menu">
    <?php foreach ($segundos as $plato): ?>
        <div class="plato">
            <h3><?php echo $plato['nombre']; ?></h3>
            <img src="<?php echo $plato['foto']; ?>" alt="<?php echo $plato['nombre']; ?>" style="width:150px; height:auto;">
            <p>Precio: €<?php echo number_format($plato['precio'], 2); ?></p>
        </div>
    <?php endforeach; ?>
</div>

<h2>Postres</h2>
<div class="menu">
    <?php foreach ($postres as $plato): ?>
        <div class="plato">
            <h3><?php echo $plato['nombre']; ?></h3>
            <img src="<?php echo $plato['foto']; ?>" alt="<?php echo $plato['nombre']; ?>" style="width:150px; height:auto;">
            <p>Precio: €<?php echo number_format($plato['precio'], 2); ?></p>
        </div>
    <?php endforeach; ?>
</div>

<h2>Menú Seleccionado</h2>
<div class="menu_seleccionado">
    <h3><?php echo $menu_seleccionado['primer']['nombre']; ?>, <?php echo $menu_seleccionado['segundo']['nombre']; ?>, <?php echo $menu_seleccionado['postre']['nombre']; ?></h3>
    <p>Precio total con descuento: €<?php echo number_format($precio_menu, 2); ?></p>
</div>

</body>
</html>
