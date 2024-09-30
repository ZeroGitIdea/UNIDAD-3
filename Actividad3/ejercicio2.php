<?php
/** 
 * Indexar ejercicios mediante un array.
 */

// Definir un array que contiene los ejercicios.
$ejercicios = [
    [
        'titulo' => 'Ejercicio 1: Números del 1 al 10',
        'descripcion' => 'Escribir los números del 1 al 10 usando PHP.',
        'codigo' => '<?php for ($i = 1; $i <= 10; $i++) { echo $i . " "; } ?>'
    ],
    [
        'titulo' => 'Ejercicio 2: Sumar los 3 primeros números pares',
        'descripcion' => 'Calcular la suma de los 3 primeros números pares.',
        'codigo' => '<?php $suma = 2 + 4 + 6; echo "La suma es: " . $suma; ?>'
    ],
    [
        'titulo' => 'Ejercicio 3: Tablas de multiplicar del 1 al 10',
        'descripcion' => 'Mostrar las tablas de multiplicar del 1 al 10.',
        'codigo' => '<?php for ($i = 1; $i <= 10; $i++) { echo "Tabla del " . $i . ":<br>"; for ($j = 1; $j <= 10; $j++) { echo $i . " x " . $j . " = " . ($i * $j) . "<br>"; } } ?>'
    ],
    [
        'titulo' => 'Ejercicio 4: Paleta de colores',
        'descripcion' => 'Mostrar una tabla de colores con enlaces a fondos de color.',
        'codigo' => '<?php /* Código para mostrar paleta de colores aquí */ ?>'
    ],
    [
        'titulo' => 'Ejercicio 5: Calendario mensual',
        'descripcion' => 'Mostrar un calendario mensual con el día actual en verde y festivos en rojo.',
        'codigo' => '<?php /* Código para mostrar calendario aquí */ ?>'
    ],
    [
        'titulo' => 'Ejercicio 6: Array de información',
        'descripcion' => 'Definir un array con meses, tablero de barcos, notas, verbos y continentes.',
        'codigo' => '<?php /* Código para definir array aquí */ ?>'
    ],
];

// Mostrar la lista de ejercicios
echo "<h1>Índice de Ejercicios</h1>";
foreach ($ejercicios as $index => $ejercicio) {
    echo "<h2>{$ejercicio['titulo']}</h2>";
    echo "<p>{$ejercicio['descripcion']}</p>";
    echo "<pre>{$ejercicio['codigo']}</pre>"; // Mostrar el código
}
?>
