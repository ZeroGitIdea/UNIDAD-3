<?php
/** 
 * 1. Definir un array que permita almacenar y mostrar la siguiente información.
 */

// a. Meses del año
$meses = [
    1 => 'Enero',
    2 => 'Febrero',
    3 => 'Marzo',
    4 => 'Abril',
    5 => 'Mayo',
    6 => 'Junio',
    7 => 'Julio',
    8 => 'Agosto',
    9 => 'Septiembre',
    10 => 'Octubre',
    11 => 'Noviembre',
    12 => 'Diciembre',
];

/** 
 * b. Tablero para jugar al juego de los barcos.
 * Representa un tablero donde 'X' indica la presencia de un barco
 * y 'O' indica un espacio vacío.
 */
$tablero_barcos = [
    ['X', 'O', 'O', 'O', 'O', 'O'],
    ['O', 'X', 'O', 'O', 'O', 'O'],
    ['O', 'O', 'X', 'O', 'O', 'O'],
    ['O', 'O', 'O', 'O', 'O', 'O'],
    ['O', 'O', 'O', 'O', 'X', 'O'],
    ['O', 'O', 'O', 'O', 'O', 'O'],
];

/** 
 * c. Nota de los alumnos de 2o DAW para el módulo DWES.
 * Almacena los nombres de los alumnos y sus respectivas notas.
 */
$notas_alumnos = [
    'Juan' => 8.5,
    'María' => 9.0,
    'Pedro' => 7.0,
    'Laura' => 6.5,
    'Carlos' => 9.5,
];

/** 
 * d. Verbos irregulares en inglés.
 * Contiene un array asociativo con verbos en presente y su forma en pasado.
 */
$verbos_irregulares = [
    'be' => 'was/were',
    'begin' => 'began',
    'choose' => 'chose',
    'do' => 'did',
    'go' => 'went',
    'have' => 'had',
    'see' => 'saw',
    'take' => 'took',
];

/** 
 * e. Información sobre continentes, países, capitales y banderas.
 * Se almacena la información en un array multidimensional.
 */
$continentes = [
    'Europa' => [
        'países' => [
            'España' => ['capital' => 'Madrid', 'bandera' => '🇪🇸'],
            'Francia' => ['capital' => 'París', 'bandera' => '🇫🇷'],
            'Alemania' => ['capital' => 'Berlín', 'bandera' => '🇩🇪'],
        ],
    ],
    'Asia' => [
        'países' => [
            'Japón' => ['capital' => 'Tokio', 'bandera' => '🇯🇵'],
            'China' => ['capital' => 'Pekín', 'bandera' => '🇨🇳'],
            'India' => ['capital' => 'Nueva Delhi', 'bandera' => '🇮🇳'],
        ],
    ],
    'América' => [
        'países' => [
            'Estados Unidos' => ['capital' => 'Washington D.C.', 'bandera' => '🇺🇸'],
            'México' => ['capital' => 'Ciudad de México', 'bandera' => '🇲🇽'],
            'Argentina' => ['capital' => 'Buenos Aires', 'bandera' => '🇦🇷'],
        ],
    ],
];

/** 
 * Mostrar la información almacenada en los arrays.
 */

// Mostrar los meses del año
echo "<h2>Meses del Año:</h2>";
foreach ($meses as $numero => $mes) {
    echo "$numero: $mes <br>";
}

// Mostrar el tablero de barcos
echo "<h2>Tablero para Jugar al Juego de los Barcos:</h2>";
foreach ($tablero_barcos as $fila) {
    echo implode(' ', $fila) . "<br>";
}

// Mostrar las notas de los alumnos
echo "<h2>Notas de Alumnos de 2o DAW para el Módulo DWES:</h2>";
foreach ($notas_alumnos as $alumno => $nota) {
    echo "$alumno: $nota <br>";
}

// Mostrar los verbos irregulares
echo "<h2>Verbos Irregulares en Inglés:</h2>";
foreach ($verbos_irregulares as $verbo => $pasado) {
    echo "$verbo: $pasado <br>";
}

// Mostrar información sobre continentes, países, capitales y banderas
echo "<h2>Información sobre Continentes, Países, Capitales y Banderas:</h2>";
foreach ($continentes as $continente => $info) {
    echo "<strong>$continente:</strong><br>";
    foreach ($info['países'] as $pais => $data) {
        echo "- $pais (Capital: {$data['capital']}, Bandera: {$data['bandera']}) <br>";
    }
}
?>
