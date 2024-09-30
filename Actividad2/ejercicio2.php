<?php
/**
 * 2. Sumar los 3 primeros números pares.
 */

// Inicializar la suma
$suma = 0;

// Contador para contar los números pares
$contador = 0;

// Bucle para encontrar y sumar los 3 primeros números pares
for ($i = 1; $contador < 3; $i++) {
    if ($i % 2 == 0) { // Verifica si el número es par
        $suma += $i;  // Suma el número par
        $contador++;   // Incrementa el contador
    }
}

// Imprimir el resultado
echo "La suma de los 3 primeros números pares es: " . $suma;
?>
