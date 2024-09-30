<?php
/* Fecha de nacimiento: Año, Mes, Día */
$anio_nacimiento = 2001;
$mes_nacimiento = 3;
$dia_nacimiento = 16;

/* Crear un objeto DateTime con la fecha de nacimiento */
$fecha_nacimiento = new DateTime("$anio_nacimiento-$mes_nacimiento-$dia_nacimiento");

/* Obtener la fecha actual */
$fecha_actual = new DateTime();

/* Calcular la diferencia entre las fechas */
$diferencia = $fecha_actual->diff($fecha_nacimiento);

/* Obtener la edad en años */
$edad = $diferencia->y;

echo "Tienes $edad años.";
?>

