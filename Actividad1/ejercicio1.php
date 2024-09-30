<?php
/*1. Almacena tres números en variables y escribirlos en pantalla de manera ordenada.
Almacenamos los números en variables*/
$num1 = 45;
$num2 = 13;
$num3 = 78;

/* Comparamos y mostramos los números en orden ascendente*/
if ($num1 <= $num2 && $num1 <= $num3) {
    echo $num1 . ", ";
    if ($num2 <= $num3) {
        echo $num2 . ", " . $num3;
    } else {
        echo $num3 . ", " . $num2;
    }
} elseif ($num2 <= $num1 && $num2 <= $num3) {
    echo $num2 . ", ";
    if ($num1 <= $num3) {
        echo $num1 . ", " . $num3;
    } else {
        echo $num3 . ", " . $num1;
    }
} else {
    echo $num3 . ", ";
    if ($num1 <= $num2) {
        echo $num1 . ", " . $num2;
    } else {
        echo $num2 . ", " . $num1;
    }
}
?>